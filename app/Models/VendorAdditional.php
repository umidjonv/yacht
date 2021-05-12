<?php


namespace App\Models;


class VendorAdditional extends BaseModel
{
    protected $table = 'vendors_additional';

    public function vendor()
    {
        return $this->hasOne(Vendor::class);
    }

}
