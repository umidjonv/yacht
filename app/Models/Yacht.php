<?php


namespace App\Models;


class Yacht extends BaseModel
{
    protected $table = 'yachts';
    /**
     * @var mixed
     */


    public function vendor()
    {
        return $this->belongsTo(Vendor::class);
    }

}
