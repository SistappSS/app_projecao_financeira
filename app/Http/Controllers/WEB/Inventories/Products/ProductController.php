<?php

namespace App\Http\Controllers\WEB\Inventories\Products;

use App\Http\Controllers\Controller;
use App\Traits\WebIndex;

class ProductController extends Controller
{
    use WebIndex;

    public function index() {
        return $this->webRoute('app.inventories.products.product.product_index', 'product');
    }
}
