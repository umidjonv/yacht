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
        $validation = Validator::make($request->all(), [
            'ReservationTime'=>'required',
            'ReservationDate'=>'required',
            'Adults'=>'required',
            'Childs'=>'required',
            'TotalAmount'=>'required'

        ]);

        if($validation->fail())
        {

        }

        $reservation = new Reservation();

        $reservation->ReservationTime =  $request->input('time');


        return dd($request->all());

    }



}
