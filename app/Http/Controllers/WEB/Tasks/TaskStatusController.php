<?php

namespace App\Http\Controllers\WEB\Tasks;

use App\Http\Controllers\Controller;
use App\Traits\WebIndex;

class TaskStatusController extends Controller
{
    use webIndex;

    public function index()
    {
        return $this->webRoute('app.tasks.task_status.task_status_index', 'task_status');
    }
}
