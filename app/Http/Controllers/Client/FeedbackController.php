<?php


namespace App\Http\Controllers\Client;


use App\Http\Controllers\Controller;
use App\Http\Requests\VendorRequest;
use App\Models\Feedback;
use App\Models\Vendor;
use App\User;
use \Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Validator;

class FeedbackController extends Controller
{

    public function add()
    {
        return view('client.mobile.feedback.add');
    }

    public function save(Request $request)
    {
        if(!Auth::check())
        {
            return redirect('client/login');
        }

        $user= Auth::user();

        $validation = Validator::make($request->all(), [
            'Message' => 'required'
        ]);

        if($validation->fails())
        {
            return redirect()->back()
                ->withErrors($validation)
                ->withInput();
        }

        $feedback = new Feedback();
        $feedback->UserId = $user->id;
        $feedback->Message = $request->input('Message');
        $feedback->ProductId = $request->input('ProductId');
        $feedback->save();


    }

    


}
