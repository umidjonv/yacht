<?php


namespace App\Http\Controllers\Admin;



use App\Common\Enums\ResultStatus;
use App\Http\Controllers\Controller;
use App\Models\Member;
use App\User;
use Illuminate\Http\Request;

class MemberController extends Controller
{

    public function index(){
        $members = Member::with('user')->get();

        return view('admin.member.index')->with(['model'=> $members]);
    }

    public function view($id){
        return abort(404);
        $member = Member::find($id)->with('user')->get();

        return view('admin.member.view')->with(['model'=> $member]);
    }

    public function change_password(Request $request){
        $validation = \Validator::make($request->all(), [
            'password'=>'required',
            'repassword'=>'required|same:password',
            'user_id' => 'required',

        ]);


        if($validation->fails())
        {
            //return dd($request->all());

            return redirect()
                ->route('admin.member')
                ->withErrors($validation)
                ->withInput();

        }

        $password = $request->input('password');
        $user_id = $request->input('user_id');

        $user = User::find($user_id);
        $user->password = bcrypt($password);
        $user->save();

        return redirect()->route('admin.member');
    }

    public function activate($id){
        $member = Member::find($id);

        $member->MembershipStatus = true;
        $member->save();

        return response()->json(ResultStatus::Success);
    }

    public function deactivate($id){
        $member = Member::find($id);

        $member->MembershipStatus = false;
        $member->save();

        return response()->json(ResultStatus::Success);
    }

}
