<?php


namespace App\Models;


use App\User;

class Membership extends BaseModel
{
    protected $table = 'memberships';


    public function members()
    {
        return $this->hasMany(Member::class, 'MembershipId');
    }


}
