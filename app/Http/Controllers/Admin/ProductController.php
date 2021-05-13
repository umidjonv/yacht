<?php


namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Yacht;
use Illuminate\Http\Request;
use Validator;

class ProductController extends Controller
{
    private function get_yachts()
    {
        return Yacht::all();
    }

    public function index()
    {
        $products = Product::all();

        return view('admin.product.index')->with(['model'=>$products]);
    }

    public function add()
    {
        $product = new Product();

        return view('admin.product.add')->with(['model'=>$product, 'yachts'=>$this->get_yachts()]);
    }

    public function edit($id)
    {
        $product = Product::find($id);

        if($product==null)
        {
            return abort(404);
        }

        return view('admin.product.edit')->with(['model'=>$product, 'yachts'=>$this->get_yachts()]);
    }

    public function save(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'Name' => 'required|max:255',
            'Division' => 'required',
            'IsDisplayed' => 'required|boolean',
            'CapacityAdult'=> 'integer',
            'CapacityChild' => 'integer',
            'PriceAdult'=> 'required',
            'PriceChild'=> 'required',
        ]);

        $product = new Product();

        if($request->Id>0)
        {
            $product = Product::find($request->Id);
        }

        $product->Name = $request->input('Name');
        $product->Division = $request->input('Division');
        $product->IsDisplayed = $request->input('IsDisplayed');
        $product->CapacityAdult = $request->input('CapacityAdult');
        $product->CapacityChild = $request->input('CapacityChild');
        $product->Description = $request->input('Description');
        $product->PriceAdult = $request->input('PriceAdult');
        $product->PriceChild = $request->input('PriceChild');
        $product->Location = $request->input('Location');
        $product->YachtId = $request->input('YachtId');



        if($product->save())
        {

        }

        return redirect('/admin/product');


    }
}