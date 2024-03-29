<?php


namespace App\Models;


use App\User;

class Vendor extends BaseModel
{
    protected $table = 'vendors';


    public function yachts()
    {
        return $this->hasMany(Yacht::class, 'VendorId');
    }

    public function vendor_additional()
    {
        return $this->hasMany(VendorAdditional::class)->first();
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'UserId');
    }

    public function reservations()
    {
        return $this->hasMany(Reservation::class, 'VendorId');
    }


}
