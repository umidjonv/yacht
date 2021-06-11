<?php


namespace App\Http\Controllers\Client;


use App\Common\Enums\UI\SortOrder;
use App\Http\Controllers\Controller;
use App\Http\Requests\VendorRequest;
use App\Models\Member;
use App\Models\Product;
use App\Models\Reservation;
use App\Models\Vendor;
use App\User;
use \Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Validator;

class ReservationController extends Controller
{

    public function prepare($id)
    {
        $product = Product::with('yacht')->find($id);

        $yacht = $product->yacht()->first();

        return view('client.mobile.reservation.prepare')->with(['model'=>$product, 'VendorId'=>$yacht->VendorId]);
    }


    public function get_times()
    {
        return response()->json('OK');
    }

    public function save(Request $request)
    {
        if(!Auth::check())
        {
            return redirect()->route('client.mobile.login');
        }

        $validation = \Validator::make($request->all(), [
            'time'=>'required',
            'ReservationDate'=>'required',
            'Adults'=>'required',
            'Childs'=>'required',
            'TotalAmount'=>'required'

        ]);

        if($validation->fails())
        {
            //return dd($request->all());

            return redirect()
                ->route('client.mobile.reservation.prepare', ['id'=>$request->input('ProductId')])
                ->withErrors($validation)
                ->withInput();

        }

        $reservation = new Reservation();

        $reservation->ReservationTime =  $request->input('time');
        $reservation->ReservationDate =  $request->input('ReservationDate');
        $reservation->Adults =  $request->input('Adults');
        $reservation->Childs =  $request->input('Childs');
        $reservation->TotalAmount =  $request->input('TotalAmount');
        $reservation->ProductId =  $request->input('ProductId');
        $reservation->UserId =  $request->input('UserId');
        $reservation->VendorId =  $request->input('VendorId');

        $reservation->save();



        return redirect()->route('client.mobile.reservation.payment',['id'=>$reservation->Id]);//view('client.mobile.reservation.payment')->with(['model'=>$reservation]);

    }

    public function payment($id)
    {


        $reservation = Reservation::where('Id', $id)->with('product')->first();

        $member = Member::where('UserId', $reservation->UserId)->first();
        $product = $reservation->product()->first();
        $yacht = $product->yacht()->first();
        $vendor = $yacht->vendor()->first();


        if($reservation==null)
            abort(404);

//        if($reservation->IsPayed)
//            return view('client.mobile.reservation.view')->with(['model'=>$reservation]);

        return view('client.mobile.reservation.payment')->with(['model'=>$reservation, 'member'=>$member, 'product'=>$product, 'vendor'=>$vendor]);
    }

    public function do_payment(Request $request)
    {
        dd($request->all());
    }



}
