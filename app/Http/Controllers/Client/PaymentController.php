<?php


namespace App\Http\Controllers\Client;


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

class PaymentController extends Controller
{


    public function index()
    {
        return view('client.mobile.payment.index');
    }

    public function complete(Request $request)
    {
        return dd($request->all());
    }

    


}
