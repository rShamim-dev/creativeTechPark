<?php

namespace App\Models;

use App\Models\Product;
use App\Enum\StatusType;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Category extends Model
{
    /** @use HasFactory<\Database\Factories\CategoryFactory> */
    use HasFactory;


    protected $guarded = [];

    /**
     * Summary of scopeActive
     * @param mixed $query
     * @return mixed
     */
    public function scopeActive($query)
    {
        return $query->where('status', StatusType::ACTIVE);
    }

    /**
     * Summary of products
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function products()
    {
        return $this->belongsToMany(Product::class, 'category_product');
    }
}
