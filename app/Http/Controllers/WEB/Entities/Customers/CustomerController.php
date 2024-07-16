<?php

namespace App\Http\Controllers\WEB\Entities\Customers;

use App\Http\Controllers\Controller;
use App\Traits\WebIndex;

class CustomerController extends Controller
{
    use WebIndex;

    public function index() {
        return $this->webRoute('app.entities.customers.customer.customer_index', 'customer');
    }
}
