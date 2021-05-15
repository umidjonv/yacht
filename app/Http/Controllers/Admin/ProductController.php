<?php


namespace App\Http\Controllers\Admin;


use App\Common\JsonData;
use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Vendor;
use App\Models\Yacht;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Validator;

class ProductController extends BaseController
{
    public function get_yachts()
    {
        $user = Auth::user();
        if($user==null)
            return response()->json([
                'message' => "user is not auhenticated"], 500);


        $vendor = Vendor::where('UserId', $user->id)->with('yachts')->first();



        if($vendor==null)
            return response()->json([
                'message' => "cannot find vendor"], 500);

        $yachts = $vendor->yachts();//Yacht::where('VendorId', $vendor->Id)->get();


        $data = $yachts->get(['Id', 'Name'])->toJson();

        return response()->json($data);
    }

    public function index()
    {
        $yachtd = new \App\Common\Enums\YachtDivision();

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

        return view('admin.product.add')->with(['model'=>$product, 'yachts'=>$this->get_yachts()]);
    }

    /**
     * @param Request $request
     * @return \Illuminate\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function save(Request $request)
    {
        //return dd($request->all());

        $validator = \Validator::make($request->all(), [
            'Name' => 'required|max:255',
            'Division' => 'required',
            'IsDisplayed' => 'required',
            'CapacityAdult'=> 'integer',
            'CapacityChild' => 'integer',
            'PriceAdult'=> 'required',
            'PriceChild'=> 'required',
        ]);

        if ($validator->fails()) {
            return redirect()
                ->route('admin.product.add')
                ->withErrors($validator)
                ->withInput();
        }

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