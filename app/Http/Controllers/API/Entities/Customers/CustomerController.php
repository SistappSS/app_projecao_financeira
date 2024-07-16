<?php

namespace App\Http\Controllers\API\Entities\Customers;

use App\Http\Controllers\Controller;
use App\Http\Requests\Entities\Customers\StoreCustomerRequest;
use App\Http\Requests\Entities\Customers\UpdateCustomerRequest;
use App\Models\Entities\Customers\Customer;
use App\Traits\CrudResponse;

class CustomerController extends Controller
{
    use CrudResponse;

    public function __construct(Customer $customer)
    {
        $this->customer = $customer;
    }

    public function index()
    {
        return $this->indexMethod($this->customer->get());
    }

    public function store(StoreCustomerRequest $request)
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

        return $this->storeMethod($this->customer, $data);
    }

    public function show($id)
    {
        return $this->showMethod($this->customer->find($id));
    }

    public function update(UpdateCustomerRequest $request, $id)
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

        return $this->updateMethod($this->customer->find($id), $data);
    }

    public function destroy($id)
    {
        return $this->destroyMethod($this->customer->find($id));
    }
}
