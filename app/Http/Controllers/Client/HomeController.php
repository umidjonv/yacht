<?php


namespace App\Http\Controllers\Client;


use App\Http\Controllers\Controller;
use App\Http\Requests\VendorRequest;
use App\Models\Banner;
use App\Models\Favourite;
use App\Models\Rating;
use App\Models\Vendor;
use \Illuminate\Http\Client\Request;
use Illuminate\Validation\Validator;

class HomeController extends Controller
{

    public function index(){
        return view('client.index');
    }

    public function mobile_index(){
        $banners = Banner::with('event')->orderBy('Order', 'asc')->get();

        $ratings = Rating::with('product')->with('product.yacht.images')->take(5)->get();

        return view('client.mobile.index')->with(['banners'=>$banners, 'ratings'=>$ratings]);
    }

    public function vendor_login(){
        return view('client.vendor.login');
    }

    public function vendor_register(){
        return view('client.vendor.register');
    }

    public function vendor_register_save(Request $request){

        //        $model = $request->validated();

        return 'dd($request->all());';
    }


}
