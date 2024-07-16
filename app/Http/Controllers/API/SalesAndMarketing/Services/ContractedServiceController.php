<?php

namespace App\Http\Controllers\API\SalesAndMarketing\Services;

use App\Http\Controllers\Controller;

use App\Http\Requests\SalesAndMarketing\ContractedServices\StoreContractedServiceRequest;
use App\Http\Requests\SalesAndMarketing\ContractedServices\UpdateContractedServiceRequest;
use App\Models\SalesAndMarketing\Services\ContractedService;
use App\Traits\CrudResponse;

class ContractedServiceController extends Controller
{
    use CrudResponse;

    public function __construct(ContractedService $contractedService)
    {
        $this->contractedService = $contractedService;
    }

    public function index()
    {
        return $this->indexMethod($this->contractedService->get(),'user');
    }

    public function store(StoreContractedServiceRequest $request)
    {
        $request->validated();

        $data = [
            'name' => $request->name,
            'price' => decimalPrice($request->price),
            'description' => $request->description,
            'type' => $request->type,
            'is_active' => boolval($request->is_active),
            'renewal_date' => $request->renewal_date,
            'hiring_date' => $request->hiring_date
        ];

        return $this->storeMethod($this->contractedService, $data);
    }

    public function show($id)
    {
        return $this->showMethod($this->contractedService->find($id), 'user');
    }

    public function update(UpdateContractedServiceRequest $request, $id)
    {
        $request->validated();

        $data = [
            'name' => $request->name,
            'price' => decimalPrice($request->price),
            'description' => $request->description,
            'type' => $request->type,
            'is_active' => boolval($request->is_active),
            'renewal_date' => $request->renewal_date,
            'hiring_date' => $request->hiring_date
        ];

        return $this->updateMethod($this->contractedService->find($id), $data);
    }

    public function destroy($id)
    {
        return $this->destroyMethod($this->contractedService->find($id));
    }
}
