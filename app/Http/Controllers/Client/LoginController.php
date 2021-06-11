<?php

namespace App\Http\Controllers\Client;
use App\Models\Member;
use App\Rules\Whitespace;

use DateTime;
use Illuminate\Support\Facades\DB;
use Validator;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Auth;



class LoginController extends BaseController
{

    public function index()
    {

        return view('client.mobile.auth.login');
    }

    public function register1()
    {
        return view('client.mobile.auth.register1');
    }

    public function register2()
    {
        return view('client.mobile.auth.register2');
    }

    public function register2_complete(Request $request)
    {

        $validator = Validator::make($request->all(),[
            'name' => ['required','unique:users', 'email','max:255',new Whitespace()],
            'phone' => 'required|max:255|min:11',

            'returned_code' => 'required|numeric|min:6',
            'password' => 'required|min:6',
            'repassword' => 'required|same:password',
        ]);

        if($validator->fails())
        {
            //return dd($validator->errors());

            return redirect()
                ->route('client.mobile.register2')
                ->withErrors($validator)
                ->withInput();
        }


        $userId = DB::table('users')->insertGetId(
            [
                'name' => $request->name,
                'email' => $request->name,
                'password' => bcrypt($request->password),
            ]
        );



        $date = new DateTime('NOW');
        $formatted = $date->format('Y-m-d H:i:s');

//        $mytime = Carbon\Carbon::now();
//        $formatted = $mytime->toDateTimeString();
        $member = new Member();

        $member->WithdrawalDescription = "";
        $member->MembershipStatus = true;
        $member->CurrentPoint = 0;
        $member->AccumulatedPoint = 0;
        $member->ReservationsCount = 0;
        $member->LastVisited = $formatted ;
        $member->UserId = $userId;

        $member->save();


        return view('client.mobile.auth.register3');

    }

    public function register3()
    {

        return view('client.mobile.auth.register3');
    }

    public function logout()
    {
        Auth::logout();

        return redirect()->route('client.mobile.login');
    }


    public function attempt(Request $request)
    {
        $returned= false;
        $user = null;
        $validator = null;

        if (str_contains($request->name, '@')) {
            $validator = Validator::make($request->all(), [
                'name' => 'email|required',
                'password' => 'required'
            ]);

            if($validator->fails())
            {


                return redirect('/client/mobile/login')->withInput()->withErrors($validator);

            }



            $returned = $this->authenticateEmail($request->name, $request->password);

        }else{



            $validator = Validator::make($request->all(), [
                'name' => 'required',
                'password' => 'required'
            ]);

            if($validator->fails())
            {
                return redirect('/client/mobile/login')->withInput()-> withErrors($validator);

            }

            $name = strtolower($request->name);

            $returned = $this->authenticateName($name, $request->password);

        }


        //return dd($request->name);

        if($returned)
        {
            return redirect()->route('client.mobile.index');
        }

        $messages = [
            'name' => 'Login or password is incorrect',
        ];

        return redirect('/client/mobile/login')->withInput()->withErrors($messages);





    }
    /**
     * Handle an authentication attempt.
     *
     * @return Response
     */
    function authenticateEmail($email, $password)
    {
        if (Auth::attempt(['email' => $email, 'password' => $password])) {
            // Authentication passed...
            return true;
        }

        return false;
    }

    function authenticateName($name, $password)
    {
        if (Auth::attempt(['name' => $name, 'password' => $password])) {
            // Authentication passed...
            return true;
        }

        return false;
    }
}