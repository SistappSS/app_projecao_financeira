<?php

namespace App\Http\Controllers\API\Entities\Suppliers;

use App\Http\Controllers\Controller;
use App\Http\Requests\Entities\Suppliers\StoreSupplierRequest;
use App\Http\Requests\Entities\Suppliers\UpdateSupplierRequest;
use App\Models\Entities\Suppliers\Supplier;
use App\Traits\CrudResponse;

class SupplierController extends Controller
{
    use CrudResponse;

    public function __construct(Supplier $supplier)
    {
        $this->supplier = $supplier;
    }

    public function index()
    {
        return $this->indexMethod($this->supplier->get());
    }

    public function store(StoreSupplierRequest $request)
    {
        $request->validated();

        $data = [
            'name' => $request->name,
            'document' => $request->document,
            'phone' => $request->phone,
            'email' => $request->email,
            'address' => $request->address,
            'city' => $request->city,
            'postal_code' => $request->postal_code,
            'state_id' => $request->state_id,
            'is_active' => boolval($request->is_active),
        ];

        return $this->storeMethod($this->supplier, $data);
    }

    public function show($id)
    {
        return $this->showMethod($this->supplier->find($id));
    }

    public function update(UpdateSupplierRequest $request, $id)
    {
        $request->validated();

        $data = [
            'name' => $request->name,
            'document' => $request->document,
            'phone' => $request->phone,
            'email' => $request->email,
            'address' => $request->address,
            'city' => $request->city,
            'postal_code' => $request->postal_code,
            'state_id' => $request->state_id,
            'is_active' => boolval($request->is_active),
        ];

        return $this->updateMethod($this->supplier->find($id), $data);
    }

    public function destroy($id)
    {
        return $this->destroyMethod($this->supplier->find($id));
    }
}
