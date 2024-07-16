<?php

namespace App\Http\Controllers\WEB\Entities\Representatives;

use App\Http\Controllers\Controller;
use App\Traits\WebIndex;

class RepresentativeController extends Controller
{
    use WebIndex;

    public function index()
    {
        return $this->webRoute('app.entities.representatives.representative.representative_index', 'representative');
    }
}
