<?php

namespace App\Http\Controllers\API\SalesAndMarketing\Plans;

use App\Http\Controllers\Controller;
use App\Http\Requests\Plans\ContractedPlan\StoreContractedPlansRequest;
use App\Http\Requests\Plans\ContractedPlan\UpdateContractedPlansRequest;
use App\Models\Plans\ContractedPlans;
use App\Traits\CrudResponse;

class ContractedPlansController extends Controller
{
    use CrudResponse;

    public function __construct(ContractedPlans $contractedPlan)
    {
        $this->contractedPlan = $contractedPlan;
    }

    public function index()
    {
        return $this->indexMethod($this->contractedPlan->with('budget.customer')->get());
    }

    public function store(StoreContractedPlansRequest $request)
    {
        $request->validated();

        $data = [
            'budget_id' => $request->budget_id,
            'payment_date' => $request->payment_date,
            'indicator_name' => $request->indicator_name,
            'percentage_paid' => $request->percentage_paid,
            'type' => $request->type,
            'is_active' => boolval($request->is_active)
        ];

        return $this->storeMethod($this->contractedPlan, $data);
    }

    public function show($id)
    {
        return $this->showMethod($this->contractedPlan->find($id));
    }

    public function update(UpdateContractedPlansRequest $request, $id)
    {
        $request->validated();

        $data = [
            'budget_id' => $request->budget_id,
            'payment_date' => $request->payment_date,
            'indicator_name' => $request->indicator_name,
            'percentage_paid' => $request->percentage_paid,
            'type' => $request->type,
            'is_active' => boolval($request->is_active)
        ];

        return $this->updateMethod($this->contractedPlan->find($id), $data);
    }

    public function destroy($id)
    {
        return $this->destroyMethod($this->contractedPlan->find($id));
    }
}
