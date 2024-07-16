<?php

namespace App\Http\Controllers\WEB\Inventories\ProductSubCategories;

use App\Http\Controllers\Controller;
use App\Traits\WebIndex;
use Illuminate\Http\Request;

class ProductSubCategoryController extends Controller
{
    use WebIndex;

    public function index()
    {
        return $this->webRoute('app.inventories.product_sub_categories.product_sub_category.product_sub_category_index', 'product_sub_category');
    }
}
