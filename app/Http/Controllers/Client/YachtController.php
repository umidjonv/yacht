<?php


namespace App\Http\Controllers\Client;


use App\Http\Controllers\Controller;
use App\Http\Requests\VendorRequest;
use App\Models\Vendor;
use App\User;
use \Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Validator;

class YachtController extends Controller
{

    public function list()
    {

        return view('client.mobile.yacht.list');
    }

    public function reserved()
    {
        return view('client.mobile.yacht.reserved');

    }


    public function sell_list()
    {
        return view('client.mobile.yacht.sell');
    }


}
