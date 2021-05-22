<?php


namespace App\Http\Controllers\Client;


use App\Common\Enums\UI\SortOrder;
use App\Http\Controllers\Controller;
use App\Http\Requests\VendorRequest;
use App\Models\Product;
use App\Models\Reservation;
use App\Models\Vendor;
use App\User;
use \Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Validator;

class ReservationController extends Controller
{

    public function prepare($id)
    {
        $product = Product::find($id);

        return view('client.mobile.reservation.prepare')->with(['model'=>$product]);
    }


    public function get_times()
    {
        return response()->json('OK');
    }

    public function save(Request $request)
    {
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

        $reservation->save();



        return redirect()->route('client.mobile.reservation.payment',['id'=>$reservation->Id]);//view('client.mobile.reservation.payment')->with(['model'=>$reservation]);

    }

    public function payment($id)
    {
        $reservation = Reservation::where('Id', $id)->with('product')->first();

        if($reservation==null)
            abort(404);

//        if($reservation->IsPayed)
//            return view('client.mobile.reservation.view')->with(['model'=>$reservation]);

        return view('client.mobile.reservation.payment')->with(['model'=>$reservation]);
    }



}
