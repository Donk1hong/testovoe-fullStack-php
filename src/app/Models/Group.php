<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Group extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'parent_id'];

    public function parent() : BelongsTo
    {
        return $this->belongsTo(self::class, 'parent_id');
    }

    public function children(): HasMany
    {
        return $this->hasMany(self::class, 'parent_id');
    }

    public function products(): HasMany
    {
        return $this->hasMany(Product::class, 'group_id');
    }

    public function recursiveChildren(): HasMany
    {
        return $this->children()->with('recursiveChildren');
    }

    public function getAllGroupIds(): array
    {
        $ids = [$this->id];

        foreach ($this->recursiveChildren as $child) {
            $ids = array_merge($ids, $child->getAllGroupIds());
        }

        return $ids;
    }

    public function getProductsCountAttribute()
    {
        return Product::whereIn('group_id', $this->getAllGroupIds())->count();
    }
}
