<?php

namespace App\Http\Controllers\WEB\Entities\Customers;

use App\Http\Controllers\Controller;
use App\Models\Budgets\Budget;
use App\Models\Portfolios\Portfolio;

class CustomerBudgetController extends Controller
{
    public function index ($phone, $code){
        $portfolio = Portfolio::where('is_active', true)->get();
        $budget = Budget::where('budget_code', $code)->with('customer')->first();
//
//        dd($budget);

        return view('app.customers.customer_budget.customer_budget_index',compact('portfolio', 'budget'));
    }
}

// alterar view e descomentar código do app-layout-budget
