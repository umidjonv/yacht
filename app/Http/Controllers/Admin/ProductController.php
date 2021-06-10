<?php


namespace App\Http\Controllers\Admin;


use App\Common\Enums\UserType;
use App\Common\Enums\YachtDivision;
use App\Common\JsonData;
use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\ProductImages;
use App\Models\Vendor;
use App\Models\Yacht;
use Illuminate\Foundation\Application;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\Auth;
use phpDocumentor\Reflection\Types\Collection;
use Validator;

class  ProductController extends BaseController
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
        $products = collect();

        if(Auth::user()->type == UserType::admin)
        {
            $products = Product::all();
        }else{
            $vendor = Vendor::where('UserId', Auth::user()->id)->first();

            $yachts = Yacht::where('VendorId', $vendor->Id)-> with('products')->get();
            foreach ($yachts as $yacht)
            {
                $product = $yacht->products()->get();

                //dd($product);
                $products = $products->merge($product);
            }
        }

        $yachtd = new YachtDivision();



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
     * @return Application|RedirectResponse|Redirector
     */
    public function save(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'Name' => 'required|max:255',
            'Division' => 'required',
            'Area' => 'required',
//            'IsDisplayed' => 'required',
            'CapacityAdult'=> 'integer',
            'CapacityChild' => 'integer',
            'PriceAdult'=> 'required',
            'PriceChild'=> 'required',
            'YachtId'=> 'required',
            'Price'=> 'required',
            'images'    => 'array',
            'images.*'  => 'image|max:10240'
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
        $product->Area = $request->input('Area');
        $product->CapacityAdult = $request->input('CapacityAdult');
        $product->CapacityChild = $request->input('CapacityChild');
        $product->Introduction = $request->input('Introduction');
        $product->PriceAdult = $request->input('PriceAdult');
        $product->PriceChild = $request->input('PriceChild');
        $product->Location = $request->input('Location');
        $product->Price = $request->input('Price');
        $product->YachtId = $request->input('YachtId');
        $product->save();


        if ($files = $request->file('images')) {
            foreach($files as $file) {
                $f_name = "IMG_".date("Y-m-d_H-i-s").".".strtolower($file->getClientOriginalExtension());
                $file->storeAs("public/product", $f_name);
                ProductImages::query()->create([
                    'ProductId' => $product->Id,
                    'Name'  => $f_name,
                ]);
            }
        }
        return redirect('/admin/product');


    }
}