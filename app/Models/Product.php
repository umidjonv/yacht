<?php


namespace App\Models;


class Product extends BaseModel
{
    protected $table = 'products';
    /**
     * @var mixed
     */


    public function yacht()
    {
        return $this->belongsTo(Yacht::class, 'YachtId','Id');
    }

    public function favourite()
    {
        return $this->hasMany(Favourite::class, 'ProductId');
    }

    public function images() 
    {
        return $this->hasMany(ProductImage::class, 'ProductId', 'Id');
    }
    
    public function activities() 
    {
        return $this->hasMany(ProductActivity::class, 'ProductId', 'Id');
    }

    public function rating()
    {
        return $this->hasOne(Rating::class, 'ProductId');
    }


}
