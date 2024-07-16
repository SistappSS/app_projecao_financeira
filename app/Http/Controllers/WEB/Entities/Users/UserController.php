<?php

namespace App\Http\Controllers\WEB\Entities\Users;

use App\Http\Controllers\Controller;
use App\Traits\WebIndex;

class UserController extends Controller
{
    use WebIndex;

    public function index() {
        return $this->webRoute('app.entities.users.user.user_index', 'user');
    }
}
