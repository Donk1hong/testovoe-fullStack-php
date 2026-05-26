<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Product extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'group_id'];

    public function group(): BelongsTo
    {
        return $this->belongsTo(Group::class, 'group_id');
    }

    public function price(): HasOne
    {
        return $this->HasOne(Price::class, 'product_id');
    }

}
