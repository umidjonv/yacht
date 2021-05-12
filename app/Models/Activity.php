<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Activity extends BaseModel
{
    protected $table = 'activities';

    public function yacht()
    {
        return $this->belongsTo( Yacht::class);
    }
}
