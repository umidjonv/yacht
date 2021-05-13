<?php


namespace App\Http\Controllers\Admin;

use App\Common\EmailServers;
use App\Common\JsonData;
use App\Http\Controllers\Controller;
use App\Models\Vendor;
use App\Models\VendorAdditional;
use Illuminate\Foundation\Auth\User;
use Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use Illuminate\View\View;
use function Sodium\add;

class VendorController extends Controller
{

    public function index(){
        $data = Vendor::with('user')->get();
        $users = User::all();

        return view('admin.vendor.index')->with(['data'=> $data, 'users'=>$users]);
    }

    public function activate($id){
        $vendor = Vendor::find($id);
        $vendor->IsActive = true;
        $vendor->save();
        $data = new JsonData($vendor);

        return response()->json($data);
    }

    public function edit($id)
    {
        $routeName = Route::currentRouteName();

        $user = User::find($id);

        $vendor = Vendor::where('UserId', $id)->first();

        if($vendor===null)
        {
            return abort(404);
        }


        $additional = VendorAdditional::where('VendorId',$vendor->Id)->first();

        if($additional==null) {
            $additional = new VendorAdditional();
            $additional->VendorId = $vendor->Id;
            $additional->SettlementFee = 10;
            $additional->CancelledBefore7 = 70;
            $additional->CancelledBefore45 = 50;
            $additional->CancelledBefore13 = 40;
            $additional->CancelledOnDay = 30;
            $additional->IsCancellable = false;
        }

        if($routeName === "admin.mobile.vendor.edit")
        {
            return view('admin.mobile.vendor.edit', ['model'=>$vendor, 'user'=>$user, 'additional'=>$additional,'emails'=>EmailServers::GetEmailServers()]);

        }else{
            return view('admin.vendor.edit', ['model'=>$vendor, 'user'=>$user, 'additional'=>$additional]);
        }

    }
    
    public function save_mobile(Request $request)
    {
        return $this->save($request, $mobile=true);
    }

    public function save(Request $request, $mobile=false)
    {

        $validator = Validator::make($request->all(), [
            'Name' => 'required|unique:vendors|max:255',
            'CompanyName' => 'required|max:255',
            'Contact' => 'required|max:255',
            'RepresentativeName'=> 'max:255',
            'Email' => 'required|email|max:255|unique:users',
            'Address'=> 'required|max:255',
            'Area'=> 'required|max:255',
        ]);

        $vendor = new Vendor();
        $vendorAdditional = new VendorAdditional();
        


        if($request->Id>0)
        {
            $vendor = Vendor::find($request->Id);
            $vendorAdditional = Vendor::find($request->Id)->vendor_additional();
        }


        $vendor->UserId = $request->UserId;
        $vendor->Name = $request->Name;
        $vendor->CompanyName =$request->CompanyName;
        $vendor->Contact = $request->Contact;
        $vendor->Email = $request->Email;
        $vendor->save();

        if($vendorAdditional!=null)
        {
            $vendorAdditional->SettlementFee = $request->input('additional.SettlementFee');
            $vendorAdditional->BankId = $request->input('additional.BankId');
            $vendorAdditional->BankAccount = $request->input('additional.BankAccount');
            $vendorAdditional->BankAccountName = $request->input('additional.BankAccountName');
            $vendorAdditional->CancelledBefore7 = $request->input('additional.CancelledBefore7');
            $vendorAdditional->CancelledBefore45 = $request->input('additional.CancelledBefore45');
            $vendorAdditional->CancelledBefore13 = $request->input('additional.CancelledBefore13');
            $vendorAdditional->CancelledOnDay = $request->input('additional.CancelledOnDay');
            $vendorAdditional->IsCancellable = $request->input('additional.IsCancellable');
            $vendorAdditional->VendorId = $vendor->Id;

            $vendorAdditional->save();

        }

        if(!$mobile)
        {
            return view('admin.index');
        }else{
            return view('admin.mobile.index');
        }
    }


//
//    public function show($id){
//        $data = Post::findOrFail($id);
//        return view('posts.show')->with('data', $data);
//    }

}
