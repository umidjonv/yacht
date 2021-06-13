<?php


namespace App\Models;


use App\User;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Reservation extends BaseModel
{
    protected $table = 'reservations';

    /**
     * @return BelongsTo
     */
    public function product(): BelongsTo
    {
        return $this->belongsTo(Product::class, 'ProductId');
    }

    /**
     * @return HasOne
     */
    public function vendor(): HasOne
    {
        return $this->hasOne(Vendor::class, "Id", "VendorId");
    }
}
