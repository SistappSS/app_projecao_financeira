<?php

namespace App\Http\Controllers\API\Projects\Tasks;

use App\Http\Controllers\Controller;
use App\Http\Requests\Tasks\Task\StoreTaskRequest;
use App\Http\Requests\Tasks\Task\UpdateTaskRequest;
use App\Models\Tasks\Task;
use App\Traits\HttpResponse;

class TaskController extends Controller
{
    use HttpResponse;

    public $task;

    public function __construct(Task $task)
    {
        $this->task = $task;
    }

    public function index()
    {

    }

    public function store(StoreTaskRequest $request)
    {
        //
    }

    public function show(Task $task)
    {
        //
    }

    public function update(UpdateTaskRequest $request, Task $task)
    {
        //
    }

    public function destroy(Task $task)
    {
        //
    }
}
