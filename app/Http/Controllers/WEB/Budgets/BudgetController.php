<?php

namespace App\Http\Controllers\WEB\Budgets;

use App\Http\Controllers\Controller;
use App\Models\Budgets\Budget;
use App\Observers\BudgetObserver;
use Carbon\Carbon;
use Illuminate\Http\Request;

class BudgetController extends Controller
{
    public function index()
    {
        return view('app.sales_and_marketing.budgets.budget.budget_index');
    }

    public function create()
    {
        return view('app.sales_and_marketing.budgets.budget.budget_create');
    }

    public function edit($id)
    {
        dd('View de editar orçamento!');
        return view('app.sales_and_marketing.budgets.budget.budget_edit');
    }
}
