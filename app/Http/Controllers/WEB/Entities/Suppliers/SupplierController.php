<?php

namespace App\Http\Controllers\WEB\Entities\Suppliers;

use App\Http\Controllers\Controller;
use App\Traits\WebIndex;

class SupplierController extends Controller
{
    use WebIndex;

    public function index()
    {
        return $this->webRoute('app.entities.suppliers.supplier.supplier_index', 'supplier');
    }
}
