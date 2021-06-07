<?php


namespace App\Models;


use http\Client\Curl\User;


class Rating extends BaseModel
{
    protected $table = 'rating_view';
    /**
     * @var mixed
     */

    public function product()
    {
        return $this->belongsTo(Product::class, 'ProductId');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'UserId', 'id');
    }

}
