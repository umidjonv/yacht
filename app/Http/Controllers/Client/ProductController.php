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

class ProductController extends Controller
{

    public function list($area, $sort = SortOrder::popularity)
    {
        $products = Product::where([['Type', 1],['Area', $area]])->with('yacht')-> get();

        switch($sort)
        {
            case SortOrder::popularity:
                $products = Product::where([['Type', 1],['Area', $area]])->with('yacht')-> get();
                break;
            case SortOrder::registration:
                $products = Product::where([['Type', 1],['Area', $area]])->with('yacht')-> get();
                break;
            case SortOrder::low_price:
                $products = Product::where([['Type', 1],['Area', $area]])->with('yacht')->orderBy('Price', 'asc')->get();
                break;
            case SortOrder::high_price:
                $products = Product::where([['Type', 1],['Area', $area]])->with('yacht')->orderBy('Price', 'desc')->get();
                break;
        }



        return view('client.mobile.product.area_list', ['model'=>$products, 'sort'=>$sort, 'area'=>$area]);
    }

    public function my()
    {
        dd('mylist');

    }

    public function view($id)
    {

        $product = Product::where('Id',$id)->with('yacht')->first();

        $yacht = $product->yacht()->first();

        $vendor = $yacht->vendor()->first();


        if($vendor!=null)
        {
            return view('client.mobile.product.view')->with(['model'=>$product, 'vendor'=>$vendor]);
        }

        return redirect()->back();

    }



    public function reserved()
    {
        return view('client.mobile.product.reserved');

    }


    public function sell_list()
    {
        return view('client.mobile.product.sell');
    }


}
