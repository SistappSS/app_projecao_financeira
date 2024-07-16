<?php

namespace App\Http\Controllers\API\SalesAndMarketing\Budgets;

use App\Http\Controllers\Controller;
use App\Http\Requests\Budgets\UpdateBudgetRequest;
use App\Models\Budgets\Budget;
use App\Traits\CrudResponse;
use Illuminate\Http\Request;

class BudgetController extends Controller
{
    use CrudResponse;

    public function __construct(Budget $budget)
    {
        $this->budget = $budget;
    }

    public function index()
    {
        return $this->indexMethod($this->budget->get(), 'customer');
    }

    public function store(Request $request)
    {
        $budgetCode = Budget::max('budget_code');

        $budgetCode === null ? $code = 1 : $code = $budgetCode + 1;

        $remaining = $request->subtotal_price - $request->signal_price;

        $priceInstallments = collect($request->installments_price)->sum(function($item) {
            return floatval(str_replace(['R$', ','], ['', '.'], $item));
        });

        $totalBudget = $priceInstallments + $request->avista;

        $data = [
            'budget_code' => $code,
            'customer_id' => $request->customer_id,
            'payment_date' => $request->payment_date,
            'deadline' => $request->deadline,
            'signal' => $request->signal,
            'signal_price' => $request->signal_price,
            'remaining_price' => $remaining,
            'total_budget_price' => $totalBudget
        ];

        return $this->storeMethod($this->budget, $data);
    }

    public function show($id)
    {
        return $this->showMethod($this->budget->find($id), 'user');
    }

    public function update(UpdateBudgetRequest $request, $id)
    {
        $request->validated();

        $data = [
            'customer_id' => $request->customer_id,
            'partner_id' => $request->partner_id,
            'plan_items_id' => json_encode($request->plan_item_id),
            'discount_price' => $request->discount_price,
            'subtotal_price' => $request->subtotal_price,
            'total_price' => $request->total_price,
            'status' => $request->status,
            'method_payment' => $request->method_payment,
            'observation' => $request->observation
        ];

        return $this->updateMethod($this->budget->find($id), $data);
    }

    public function destroy($id)
    {
        return $this->destroyMethod($this->budget->find($id));
    }
}
