<?php

namespace App\Observers;

use App\Models\BudgetInstallment;
use App\Models\BudgetItem;
use App\Models\BudgetMonthlyItem;
use App\Models\Budgets\Budget;
use App\Models\BudgetYearlyItem;
use App\Models\PaymentMonthly;
use App\Models\SalesAndMarketing\Services\Services;
use App\Models\TransactionPayment;
use Carbon\Carbon;

class BudgetObserver
{
    public function created(Budget $budget): void
    {
        $request = request()->all();

        $planItemIds = $request['plan_item_id'];
        $prices = $request['price'];
        $paymentDates = $request['payment_date'];
        $paymentMethods = $request['payment_method'];
        if(isset($request['installments_value'])) { $installmentsValues = $request['installments_value']; }
        if(isset($request['discount_price'])) { $discounts = $request['discount_price']; }

        $budgetItems = [];

        foreach ($planItemIds as $index => $planItemId) {
            $planItem = Services::find($planItemId);

            if ($planItem && $planItem->type == 'lifetime') {
                $itemPrice = floatval($prices[$index]);
                $discountPercent = isset($discounts[$index]) ? floatval($discounts[$index]) : 0.0;
                $priceWithDiscount = $itemPrice * (1 - $discountPercent / 100);
                $paymentMethod = $paymentMethods[$index];

                $budgetItem = BudgetItem::create([
                    'budget_id' => $budget->id,
                    'plan_item_id' => $planItemId,
                    'item_price' => $itemPrice,
                    'discount_price' => $discountPercent,
                    'price_with_discount' => $priceWithDiscount,
                    'payment_method' => $paymentMethod,
                    'created_at' => Carbon::now()
                ]);

                $budgetItems[] = $budgetItem;
            } else if ($planItem && $planItem->type == 'monthly') {
                $paymentDay = Carbon::parse($paymentDates)->day;

                BudgetMonthlyItem::create([
                   'budget_id' => $budget->id,
                    'plan_item_id' => $planItemId,
                    'payment_day' => $paymentDay
                ]);
            } else if ($planItem && $planItem->type == 'yearly') {
                $paymentDay = Carbon::parse($paymentDates)->day;

                BudgetYearlyItem::create([
                    'budget_id' => $budget->id,
                    'plan_item_id' => $planItemId,
                    'payment_day' => $paymentDay
                ]);
            }
        }

        foreach ($budgetItems as $index => $budgetItem) {
            if (isset($installmentsValues[$index])) {
                $installmentValue = $installmentsValues[$index];
                $this->processInstallments($budgetItem, $request['payment_date'], $installmentValue);
            }
        }
    }

    private function processInstallments($budgetItem, $paymentDate, $installmentValue)
    {
        preg_match('/(\d+)x - R\$ (\d+\.\d+)/', $installmentValue, $matches);
        $installmentsCount = intval($matches[1] ?? 0);
        $installmentPrice = floatval($matches[2] ?? 0.0);

        for ($i = 2; $i <= $installmentsCount; $i++) {
            BudgetInstallment::create([
                'budget_item_id' => $budgetItem->id,
                'installment_number' => $i,
                'payment_date' => Carbon::parse($paymentDate)->addMonths($i - 1)->format('Y-m-d'),
                'price' => $installmentPrice,
                'status' => 'pending',
                'created_at' => Carbon::now()
            ]);
        }
    }
}
