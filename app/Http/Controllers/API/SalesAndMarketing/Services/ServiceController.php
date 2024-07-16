<?php

namespace App\Http\Controllers\API\SalesAndMarketing\Services;

use App\Http\Controllers\Controller;
use App\Http\Requests\SalesAndMarketing\Services\StoreServiceRequest;
use App\Http\Requests\SalesAndMarketing\Services\UpdateServiceRequest;
use App\Models\SalesAndMarketing\Services\Services;
use App\Traits\CrudResponse;

class ServiceController extends Controller
{
    use CrudResponse;

    public function __construct(Services $service)
    {
        $this->service = $service;
    }

    public function index()
    {
        return $this->indexMethod($this->service->get());
    }

    public function store(StoreServiceRequest $request)
    {
        $request->validated();

        $data = [
            'name' => $request->name,
            'price' => $request->price,
            'description' => $request->description,
            'type' => $request->type
        ];

        return $this->storeMethod($this->service, $data);
    }

    public function show($id)
    {
        return $this->showMethod($this->service->find($id), 'user');
    }

    public function update(UpdateServiceRequest $request, $id)
    {
        $request->validated();

        $data = [
            'name' => $request->name,
            'price' => $request->price,
            'description' => $request->description,
            'type' => $request->type
        ];

        return $this->updateMethod($this->service->find($id), $data);
    }

    public function destroy($id)
    {
        return $this->destroyMethod($this->service->find($id));
    }
}
