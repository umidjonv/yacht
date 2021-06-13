<?php


namespace App\Http\Controllers\Client;


use App\Common\Enums\UI\SortOrder;
use App\Http\Controllers\Controller;
use App\Http\Requests\VendorRequest;
use App\Models\Favourite;
use App\Models\Feedback;
use App\Models\Product;
use App\Models\Vendor;
use App\User;
use http\Exception;
use \Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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
                $products = Product::where([['Type', 1],['Area', $area]])->with('yacht')->with('yacht.images')->with('rating')-> get();
                break;
            case SortOrder::registration:
                $products = Product::where([['Type', 1],['Area', $area]])->with('yacht')->with('yacht.images')->with('rating')->get();
                break;
            case SortOrder::low_price:
                $products = Product::where([['Type', 1],['Area', $area]])->with('yacht')->with('yacht.images')->with('rating')->orderBy('Price', 'asc')->get();
                break;
            case SortOrder::high_price:
                $products = Product::where([['Type', 1],['Area', $area]])->with('yacht')->with('yacht.images')->with('rating')->orderBy('Price', 'desc')->get();
                break;
        }



        return view('client.mobile.product.area_list', ['model'=>$products, 'sort'=>$sort, 'area'=>$area]);
    }

    public function my()
    {

    }

    public function view($id)
    {

        $product = Product::where('Id',$id)->with('yacht')->first();

        if(!Auth::check())
        {
            return redirect('client/login');
        }
        $user= Auth::user();


        $parentFeedbacks = Feedback::where('ProductId', $id)
            ->where('ParentId', null)
            ->where('IsPublic', true)
            
            ->with('childs')->get();


        $yacht = $product->yacht()->with('images')->first();

        $vendor = $yacht->vendor()->first();


        if($vendor!=null)
        {
            return view('client.mobile.product.view')->with(['model'=>$product, 'vendor'=>$vendor, 'feedbacks'=>$parentFeedbacks, 'yacht'=>$yacht]);
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

    public function set_favourite($id)
    {
        $product = Product::find($id);

        $user  = Auth::user();



        if(!Auth::check())
        {
            throw new \Exception("not authenticated");
        }

        $favour = Favourite::where([
            ['ProductId', $product->Id],
            ['UserId', $user->id]
        ])->first();

        if($favour==null)
        {
            $favour = new Favourite();
            $favour->UserId = $user->id;
            $favour->ProductId = $product->Id;

            $favour->save();

        }

        return response()->json('success');

    }

    public function remove_favourite($id)
    {
        $product = Product::find($id);

        $user  = Auth::user();

        Favourite::where([
            ['ProductId', $product->Id],
            ['UserId', $user->id]
        ])->delete();

        return response()->json("success");

    }



}
