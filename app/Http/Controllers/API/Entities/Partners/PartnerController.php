<?php

namespace App\Http\Controllers\API\Entities\Partners;

use App\Http\Controllers\Controller;
use App\Http\Requests\Entities\Partners\StorePartnerRequest;
use App\Http\Requests\Entities\Partners\UpdatePartnerRequest;
use App\Models\Entities\Partners\Partner;
use App\Traits\CrudResponse;

class PartnerController extends Controller
{
    use CrudResponse;

    public function __construct(Partner $partner)
    {
        $this->partner = $partner;
    }

    public function index()
    {
        return $this->indexMethod($this->partner->get(), 'user');
    }

    public function store(StorePartnerRequest $request)
    {
        $request->validated();

        $data = [
            'user_id' => $request->user_id,
            'salary_percent' => $request->salary_percent
        ];

        return $this->storeMethod($this->partner, $data);
    }

    public function show($id)
    {
        return $this->showMethod($this->partner->find($id), 'user');
    }

    public function update(UpdatePartnerRequest $request, $id)
    {
        $request->validated();

        $data = [
            'user_id' => $request->user_id,
            'salary_percent' => $request->salary_percent
        ];

        return $this->updateMethod($this->partner->find($id), $data);
    }

    public function destroy($id)
    {
        return $this->destroyMethod($this->partner->find($id));
    }
}
