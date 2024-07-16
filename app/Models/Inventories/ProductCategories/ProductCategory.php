<?php

namespace App\Models\Inventories\ProductCategories;

use App\Models\Inventories\ProductSubCategories\ProductSubCategory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class ProductCategory extends Model
{
    use HasFactory;

    public function subCategories(): HasMany
    {
        return $this->hasMany(ProductSubCategory::class, 'category_id');
    }
}
