<?php

namespace App\Http\Controllers\API\Projects\Tasks;

use App\Http\Controllers\Controller;
use App\Http\Requests\Tasks\TaskStatus\StoreTaskStatusRequest;
use App\Http\Requests\Tasks\TaskStatus\UpdateTaskStatusRequest;
use App\Models\Tasks\TaskStatus;
use App\Traits\HttpResponse;
use Carbon\Carbon;

class TaskStatusController extends Controller
{
    use HttpResponse;

    public function __construct(TaskStatus $taskStatus)
    {
        $this->taskStatus = $taskStatus;
    }

    public function index()
    {
        $taskStatus = $this->taskStatus->get();

        $taskStatus->each(function ($taskStatus) {
            $taskStatus->humansDate = humansDate($taskStatus->created_at);
        });

        return $this->trait("get", $taskStatus);
    }

    public function store(StoreTaskStatusRequest $request)
    {
        $request->validated();

        $lastOrder = TaskStatus::max('position');

        $nextOrder = $lastOrder + 1;

        $taskStatus = $this->taskStatus->create([
            'task_status' => $request->task_status,
            'color' => $request->color,
            'position' => $nextOrder,
            'created_at' => Carbon::now()
        ]);

        return $this->trait("store", $taskStatus);
    }

    public function show($id)
    {
        $taskStatus = $this->taskStatus->find($id);

        if ($taskStatus === null) {
            return $this->trait("error");
        } else {
            return $this->trait("get", $taskStatus);
        }
    }

    public function update(UpdateTaskStatusRequest $request, $id)
    {
        $request->validated();

        $taskStatus = $this->taskStatus->find($id);

        $taskStatus->update([
            'task_status' => $request->task_status,
            'color' => $request->color,
            'updated_at' => Carbon::now()
        ]);

        return $this->trait("update", $taskStatus);
    }

    public function destroy($id)
    {
        $taskStatus = $this->taskStatus->find($id);

        if ($taskStatus === null) {
            return $this->trait("error");
        } else {

            $taskStatus->delete();

            return $this->trait("delete", $taskStatus);
        }
    }
}
