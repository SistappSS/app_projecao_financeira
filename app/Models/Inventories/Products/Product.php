<?php

namespace App\Models\Inventories\Products;

use App\Models\Inventories\Inventories\Inventory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Product extends Model
{
    use HasFactory;

    public function inventory(): HasOne
    {
        return $this->hasOne(Inventory::class);
    }
}
