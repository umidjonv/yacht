<?php


namespace App\Models;


use App\User;

class Member extends BaseModel
{
    protected $table = 'members';


    public function user()
    {
        return $this->belongsTo(User::class, 'UserId');
    }

    public function memberships()
    {
        return $this->belongsTo(Membership::class, 'MembershipId');
    }

}
