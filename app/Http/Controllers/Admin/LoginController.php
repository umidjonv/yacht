<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Validation\Validator;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Auth;

/**
 * Class LoginController
 * @package App\Http\Controllers\Admin
 */
class LoginController extends BaseController
{

    public function index()
    {
        return view('admin.mobile.auth.login');

    }

    public function logout_admin()
    {
        Auth::logout();

        return redirect()->route('admin.index');
    }

    public function logout()
    {
        Auth::logout();

        return redirect()->route('admin.mobile.login.index');
    }


    public function attempt(Request $request)
    {
        $returned= false;
        $user = null;
        $validator = null;

        if (str_contains($request->name, '@')) {
            $validator = Validator::make($request->all(), [
                'name' => 'unique:users,email|email|required',
                'password' => 'required'
            ]);

            $returned = $this->authenticateEmail($request->name, $request->password);

        }else{
            $validator = Validator::make($request->all(), [
                'name' => 'unique:users,name|required',
                'password' => 'required'
            ]);

            $name = strtolower($request->name);

            $returned = $this->authenticateName($name, $request->password);

        }

        //return dd($request->name);

        if($returned)
        {
            return redirect()->route('admin.mobile.index');
        }

        if($validator->fails())
        {
            return redirect('/admin/mobile/login')->withErrors($validator);

        }

        $messages = [
            'name' => 'Login or password is incorrect',
        ];

        return redirect('/admin/mobile/login')->withErrors($messages);





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