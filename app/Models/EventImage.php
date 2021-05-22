<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EventImage extends BaseModel
{
    protected $table = 'event_images';

    protected $fillable = [
        'Name',
        'EventId'
    ];
}
