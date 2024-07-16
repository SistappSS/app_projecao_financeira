<?php

namespace App\Http\Controllers\WEB\SalesAndMarketing\Services;

use App\Http\Controllers\Controller;
use App\Traits\WebIndex;

class ServiceController extends Controller
{
    use WebIndex;

    public function index() {
        return $this->webRoute('app.sales_and_marketing.services.service.service_index', 'service');
    }
}
