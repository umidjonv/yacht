<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductImage extends BaseModel
{
    protected $table = 'product_images';

    protected $fillable = [
        'Name',
        'ProductId'
    ];
    //
}
