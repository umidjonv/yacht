<?php


namespace App\Http\Controllers\Client;


use App\Common\Enums\UI\SortOrder;
use App\Http\Controllers\Controller;
use App\Http\Requests\VendorRequest;
use App\Models\Product;
use App\Models\Vendor;
use App\User;
use \Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Validator;

class YachtController extends Controller
{


    public function index()
    {
        return view("client.yacht.index");
    }


    public function list($sort = SortOrder::popularity)
    {
        $products = Product::where('Type', 1)->with('yacht')-> get();

        switch($sort)
        {
            case SortOrder::registration:
            case SortOrder::popularity:
                $products = Product::where('Type', 1)->with('yacht')-> get();
                break;
            case SortOrder::low_price:
                $products = Product::where('Type', 1)->with('yacht')->orderBy('Price', 'asc')->get();
                break;
            case SortOrder::high_price:
                $products = Product::where('Type', 1)->with('yacht')->orderBy('Price', 'desc')->get();
                break;
        }



        return view('client.mobile.yacht.area_list', ['model'=>$products, 'sort'=>$sort]);
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
