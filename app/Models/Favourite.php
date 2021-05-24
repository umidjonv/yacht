<?php


namespace App\Models;


use http\Client\Curl\User;
use Products;

class Favourite extends BaseModel
{
    protected $table = 'favourites';
    /**
     * @var mixed
     */

    public function product()
    {
        return $this->belongsTo(Products::class, 'ProductId', 'Id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'UserId', 'id');
    }

}
