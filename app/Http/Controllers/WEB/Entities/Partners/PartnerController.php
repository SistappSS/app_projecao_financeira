<?php

namespace App\Http\Controllers\WEB\Entities\Partners;

use App\Http\Controllers\Controller;
use App\Traits\WebIndex;

class PartnerController extends Controller
{
    use WebIndex;

    public function index()
    {
        return $this->webRoute('app.entities.partners.partner.partner_index', 'partner');
    }
}
