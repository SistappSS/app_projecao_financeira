<?php

namespace App\Http\Controllers\WEB\Tasks;

use App\Http\Controllers\Controller;
use App\Models\Tasks\Task;
use App\Models\Tasks\TaskStatus;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index()
    {
        $statuses = TaskStatus::with('tasks')->orderBy('position')->get();

        return view('app.tasks.task.task_index', compact('statuses'));
    }

    public function storeTask(Request $request)
    {
        $task = Task::create([
            'task' => $request->task,
            'task_status_id' => $request->task_status_id,
            'position' => Task::where('task_status_id', $request->task_status_id)->max('position') + 1,
        ]);
        return response()->json($task);
    }

    public function updateTaskPosition(Request $request)
    {
        foreach ($request->tasks as $taskData) {
            Task::where('id', $taskData['id'])->update([
                'position' => $taskData['position'],
                'task_status_id' => $taskData['task_status_id'],
            ]);
        }
        return response()->json('Positions updated');
    }

    public function storeStatus(Request $request)
    {
        $status = TaskStatus::create([
            'task_status' => $request->task_status,
            'color' => $request->color,
            'position' => TaskStatus::max('position') + 1,
        ]);
        return response()->json($status);
    }

    public function updateStatusPosition(Request $request)
    {
        foreach ($request->statuses as $statusData) {
            TaskStatus::where('id', $statusData['id'])->update([
                'position' => $statusData['position'],
            ]);
        }
        return response()->json('Positions updated');
    }

    public function removeTask(Request $request)
    {
        $taskId = $request->input('task_id');

        $task = Task::find($taskId);

        if ($task) {
            $task->delete();
            return response()->json(['message' => 'Task deleted successfully'], 200);
        } else {
            return response()->json(['error' => 'Task not found'], 404);
        }
    }
}
