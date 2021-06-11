<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductImages extends Model
{
    /** @var array */
    protected $guarded = ["Id"];

    /** @var string timestamp created_at */
    const CREATED_AT = "CreatedAt";

    /** @var string timestamp updated_at */
    const UPDATED_AT = "UpdatedAt";
}
