<?php

namespace App\Http\Controllers\Admin\Mobile;

use App\Common\Arrays\Area;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\ProductImage;
use App\Models\Yacht;
use Illuminate\Support\Str;

class ProductMobileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $vendor = auth()->user()->vendor;
        return view('admin.mobile.product.index',[
            'vendor' => $vendor
        ]);
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        $vendor = auth()->user()->vendor;
        $area = Area::get();
        return view('admin.mobile.product.create',[
            'vendor' => $vendor,
            'areas' => $area
        ]);
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = \Validator::make($request->all(), [
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
        ]);
        if ($validator->fails()) {
            return redirect()
                ->route('admin.mobile.product.create')
                ->withErrors($validator)
                ->withInput();
        }

        $product = new Product();

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
        foreach ((array) $request->file('images') as $image) {
            $f_name = $this->get_image_name($image->getClientOriginalExtension());

            $image->storeAs('public/products', $f_name);
            ProductImage::create([
                'Name' => $f_name,
                'ProductId' => $product->Id
            ]);
        }

        return redirect(route("admin.mobile.product.index"));
    }
    
    private function get_image_name($ext)
    {
        return 'IMG_'.date('Y-m-d H-i-s', time()).'.'.rand(0,999).'.'.Str::lower($ext);
    }
    

    /**
     * Display the specified resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function getYacht(Request $request)
    {
        $result = Yacht::find($request->id);
        return response($result,200);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Product::find($id);
        $vendor = auth()->user()->vendor;
        $area = Area::get();
        return view('admin.mobile.product.edit',[
            'vendor' => $vendor,
            'areas' => $area,
            'product' => $product
        ]);
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
