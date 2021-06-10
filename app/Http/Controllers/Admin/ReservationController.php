<?php


namespace App\Http\Controllers\Admin;


use App\Common\Enums\UserType;
use App\Common\JsonData;
use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Reservation;
use App\Models\Vendor;
use App\Models\Yacht;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Validator;

class ReservationController extends BaseController
{

    public function index()
    {
        $yachtd = new \App\Common\Enums\YachtDivision();
        $user = Auth::user();
        if(!auth()->check())
            return redirect('/login');

        if($user->type == UserType::user)
        {
            $reservations = Reservation::where('VendorId', $user->id)->get();

        }else
        {
            $reservations = Reservation::all();
        }

        return view('admin.reservation.index')->with(['model'=>$reservations]);
    }

    public function reservation()
    {
        $yachtd = new \App\Common\Enums\YachtDivision();

        $reservations = Reservation::all();

        return view('admin.reservation.index')->with(['model'=>$reservations]);
    }


}