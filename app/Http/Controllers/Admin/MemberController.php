<?php


namespace App\Http\Controllers\Admin;



use App\Http\Controllers\Controller;
use App\Models\Member;
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
            'repassword'=>'required',
            'user_id' => 'required',

        ]);

        if($validation->fails())
        {
            //return dd($request->all());

            return redirect()
                ->route('admin.member.index')
                ->withErrors($validation)
                ->withInput();

        }

        return redirect()->route('admin.member.index');
    }

}
