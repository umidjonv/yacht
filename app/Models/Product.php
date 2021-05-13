<?php


namespace App\Models;


class Product extends BaseModel
{
    protected $table = 'products';
    /**
     * @var mixed
     */


    public function vendor()
    {
        return $this->belongsTo(Yacht::class);
    }

}
