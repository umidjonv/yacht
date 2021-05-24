<?php

namespace App;

use App\Models\Favourite;
use App\Models\Vendor;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function vendor()
    {
        return $this->hasMany(Vendor::class)->first();
    }

    public function favourites()
    {
        return $this->hasMany(Favourite::class, 'UserId');
    }

}
