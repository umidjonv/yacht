<?php

namespace App\Http\Controllers\Admin\Mobile;

use App\Common\Enums\ReservationConstants;
use App\Models\Reservation;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

/**
 * Class ReservationController
 * @package App\Http\Controllers\Admin\Mobile
 */
class ReservationController extends Controller
{

    public function index()
    {
        $reservations = auth()->user()->reservations;
        return view("admin.mobile.reservation.index")
            ->with([
                'reservations' => $reservations
            ]);
    }

    public function show(Reservation $reservation)
    {
        return view("admin.mobile.reservation.show")
            ->with("reservation", $reservation);
    }

    /**
     * @param Reservation $reservation
     * @return RedirectResponse
     */
    public function confirm(Reservation $reservation): RedirectResponse
    {
        $reservation->Status = ReservationConstants::CONFIRMED;
        $reservation->IsReserved = 1;
        $reservation->save();
        return back()->with("message", __("reservation.mobile.confirmed"));
    }

    /**
     * @param Reservation $reservation
     * @return RedirectResponse
     */
    public function cancel(Reservation $reservation): RedirectResponse
    {
        $reservation->Status = ReservationConstants::CANCELED;
        $reservation->IsReserved = 0;
        $reservation->save();
        return back()->with("message", __("reservation.mobile.canceled"));
    }
}
