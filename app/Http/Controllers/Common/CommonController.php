<?php

namespace App\Http\Controllers\Common;

use App\Http\Controllers\Controller;
use App\Models\Common\State;
use App\Traits\HttpResponse;

class CommonController extends Controller
{
    use HttpResponse;

    public function getState()
    {
        $state = State::get();

        return $this->trait('get', $state);
    }
}
