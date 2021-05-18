<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class YachtImage extends BaseModel
{
    protected $table = 'yacht_images';

    protected $fillable = [
        'Name',
        'YachtId'
    ];
}
