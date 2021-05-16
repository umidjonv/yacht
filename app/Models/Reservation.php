<?php


namespace App\Models;


use App\User;

class Reservation extends BaseModel
{
    protected $table = 'reservations';

    public function product()
    {
        return $this->belongsTo(Product::class, 'ProductId');
    }

}
