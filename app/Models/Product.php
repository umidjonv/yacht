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
        return $this->belongsTo(Yacht::class, 'YachtId');
    }

    public function favourite()
    {
        return $this->hasMany(Favourite::class, 'ProductId');
    }


}
