<?php

namespace App\Http\Controllers\WEB\SalesAndMarketing\Plans;

use App\Http\Controllers\Controller;
use App\Traits\WebIndex;

class ContractedPlanController extends Controller
{
    use WebIndex;

    public function index() {
        return $this->webRoute('app.plans.contracted_plan.contracted_plan_index', 'contracted_plan');
    }
}
