<?php

namespace App\Http\Controllers\WEB\Inventories\ProductCategories;

use App\Http\Controllers\Controller;
use App\Traits\WebIndex;

class ProductCategoryController extends Controller
{
    use WebIndex;

    public function index()
    {
        return $this->webRoute('app.inventories.product_categories.product_category.product_category_index', 'product_category');
    }
}
