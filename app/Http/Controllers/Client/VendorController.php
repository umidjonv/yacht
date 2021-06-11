<?php


namespace App\Http\Controllers\Client;


use App\Http\Controllers\Controller;
use App\Http\Requests\VendorRequest;
use App\Models\Vendor;
use App\User;
use \Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Validator;

class VendorController extends Controller
{

    public function index()
    {
        return 'Ok';
    }

    public function login()
    {
        return view('client.vendor.login');
    }

    public function register()
    {
        return view('client.vendor.register');
    }

    public function store(VendorRequest $request)
    {

        $validated = $request->validated();

        $name = strtolower($request->name);
        $userId = DB::table('users')->insertGetId(
            [
                'name' => $name,
                'email' => $request->email,
                'password' => bcrypt($request->Password),
                'contact'   => $request->Contact,
            ]
        );

        $vendor = new Vendor();
        $vendor->UserId = $userId;
        $vendor->CompanyName =$request->CompanyName;
        $vendor->Contact = $request->Contact;

        $vendor->save();

        return view("client.vendor.register_complete");
    }


}
