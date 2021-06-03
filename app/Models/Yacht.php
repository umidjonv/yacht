<?php


namespace App\Models;


class Yacht extends BaseModel
{
    protected $table = 'yachts';
    /**
     * @var mixed
     */


    public function vendor()
    {
        return $this->belongsTo(Vendor::class, 'VendorId');
    }

    public function images() {
        return $this->hasMany(YachtImage::class, 'YachtId', 'Id');
    }
    public function products(){
        return $this->hasMany(Product::class, 'YachtId');
    }

}
