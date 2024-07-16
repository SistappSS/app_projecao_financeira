<?php

namespace App\Models\Budgets;

use App\Models\Entities\Customers\Customer;
use App\Models\Plans\ContractedPlans;
use App\Models\Plans\Plan;
use App\Observers\BudgetObserver;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

#[ObservedBy([BudgetObserver::class])]
class Budget extends Model
{
    use HasFactory;

    public function customer(): BelongsTo
    {
        return $this->belongsTo(Customer::class);
    }

    public function plan(): BelongsTo
    {
        return $this->belongsTo(Plan::class);
    }

    public function contractedPlan(): HasOne
    {
        return $this->hasOne(ContractedPlans::class);
    }
}
