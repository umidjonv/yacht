<?php


namespace App\Models;


class Vendor extends BaseModel
{
    protected $table = 'vendors';


    public function yachts()
    {
        return $this->hasMany(Yacht::class);
    }

    public function vendor_additional()
    {
        return $this->hasMany(VendorAdditional::class)->first();
    }

}
