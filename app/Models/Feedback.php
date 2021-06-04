<?php


namespace App\Models;


use App\User;

class Feedback extends BaseModel
{
    protected $table = 'feedbacks';
    /**
     * @var mixed
     */


    public function product()
    {
        return $this->belongsTo(Product::class, 'ProductId');
    }

    public function childs()
    {
        return $this->hasMany(Feedback::class, 'ParentId');
    }

    public function user()
    {
        return $this->hasMany(User::class, 'UserId');
    }

}
