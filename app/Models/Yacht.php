<?php


namespace App\Models;


use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Yacht extends BaseModel
{
    protected $table = 'yachts';


    /**
     * @return HasMany
     */
    public function images(): HasMany
    {
        return $this->hasMany(YachtImage::class, 'YachtId', 'Id');
    }

    /**
     * @return HasMany
     */
    public function products(): HasMany
    {
        return $this->hasMany(Product::class, 'YachtId');
    }

    public function vendor(): HasOne
    {
        return $this->hasOne(Vendor::class, 'YachtId', 'Id');
    }

    /**
     * @return HasMany
     */
    public function activities(): HasMany
    {
        return $this->hasMany(Activity::class, "YachtId");
    }

}
