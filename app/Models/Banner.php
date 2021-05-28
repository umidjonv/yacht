<?php


namespace App\Models;


class Banner extends BaseModel
{
    protected $table = 'banners';
    /**
     * @var mixed
     */


    public function event()
    {
        return $this->belongsTo(Event::class, 'EventId');
    }

}
