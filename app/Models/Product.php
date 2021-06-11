<?php


namespace App\Models;


use Illuminate\Database\Eloquent\Relations\HasMany;

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

    public function activities() 
    {
        return $this->hasMany(ProductActivity::class, 'ProductId', 'Id');
    }

    public function rating()
    {
        return $this->hasOne(Rating::class, 'ProductId');
    }

    /**
     * @return HasMany
     */
    public function images(): HasMany
    {
        return $this->hasMany(ProductImages::class, 'ProductId', 'Id');
    }

}
