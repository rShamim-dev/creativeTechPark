<?php

namespace App\Models;

use App\Enum\StatusType;
use App\Models\Category;
use Spatie\MediaLibrary\HasMedia;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\InteractsWithMedia;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model implements HasMedia
{
    /** @use HasFactory<\Database\Factories\ProductFactory> */
    use HasFactory, InteractsWithMedia;


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
     * Summary of categories
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function categories()
    {
        return $this->belongsToMany(Category::class, 'category_product');
    }
}
