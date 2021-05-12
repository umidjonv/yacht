<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Schedule extends BaseModel
{
    protected $table = 'schedules';

    public function yacht()
    {
        return $this->belongsTo(Yacht::class);
    }

}
