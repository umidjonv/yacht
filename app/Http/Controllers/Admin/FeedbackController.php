<?php


namespace App\Http\Controllers\Client;


use App\Http\Controllers\Admin\BaseController;
use App\Http\Controllers\Controller;
use App\Http\Requests\VendorRequest;
use App\Models\Feedback;
use App\Models\Product;
use App\Models\Vendor;
use App\User;
use \Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Validator;

class FeedbackController extends BaseController
{

    public function index($tab = "answered")
    {
        if(!Auth::check())
        {
            return redirect('client/login');
        }

        $user= Auth::user();

        $feedbacks = Feedback::where('ParentId', null)
            ->with('childs')->with('users')->with('product')
            ->orderBy('Id', 'desc')
            ->paginate(10);

        return view('admin.feedback.index')->with(['model'=>$feedbacks]);
    }

    public function save(Request $request)
    {
        if(!Auth::check())
        {
            return redirect('client/login');
        }

        $user= Auth::user();

        $validation = Validator::make($request->all(), [
            'Message' => 'required',
            'ParentId' => 'required',
            'IsPublic' => 'required',
            'ProductId' => 'required',

        ]);

        if($validation->fails())
        {
            return redirect()->back()
                ->withErrors($validation)
                ->withInput();
        }

        $parentId = $request->input('ParentId');

        $parent = Feedback::find($parentId);

        //if($feedback==null)

        $feedback = new Feedback();
        $feedback->UserId = $user->id;
        $feedback->Title = $request->input('Title');
        $feedback->Message = $request->input('Message');
        $feedback->ProductId = $request->input('ParentId');
        $feedback->IsPublic = $request->input('IsPublic');
        $feedback->Type = true;
        $feedback->save();


        return redirect()->route('admin.feedback.index', ['id'=>$feedback->ProductId]);
    }

    


}
