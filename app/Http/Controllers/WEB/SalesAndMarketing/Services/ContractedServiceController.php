<?php

namespace App\Http\Controllers\WEB\SalesAndMarketing\Services;

use App\Http\Controllers\Controller;
use App\Traits\WebIndex;

class ContractedServiceController extends Controller
{
    use WebIndex;

    public function index() {
        return $this->webRoute('app.services.contracted_service.contracted_service_index', 'contracted_service');
    }
}
