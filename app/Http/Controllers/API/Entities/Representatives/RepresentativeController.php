<?php

namespace App\Http\Controllers\API\Entities\Representatives;

use App\Http\Controllers\Controller;
use App\Http\Requests\Entities\Representatives\StoreRepresentativeRequest;
use App\Http\Requests\Entities\Representatives\UpdateRepresentativeRequest;
use App\Models\Entities\Representatives\Representative;
use App\Traits\CrudResponse;

class RepresentativeController extends Controller
{
    use CrudResponse;

    public function __construct(Representative $representative)
    {
        $this->representative = $representative;
    }

    public function index()
    {
        return $this->indexMethod($this->representative->get());
    }

    public function store(StoreRepresentativeRequest $request)
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

        return $this->storeMethod($this->representative, $data);
    }

    public function show($id)
    {
        return $this->showMethod($this->representative->find($id));
    }

    public function update(UpdateRepresentativeRequest $request, $id)
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

        return $this->updateMethod($this->representative->find($id), $data);
    }

    public function destroy($id)
    {
        return $this->destroyMethod($this->representative->find($id));
    }
}
