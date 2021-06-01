<?php


namespace App\Models;


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

    public function feedbacks()
    {
        return $this->hasMany(Feedback::class, 'FeedbackId');
    }

}
