<?php

namespace App\Http\Controllers\API\Projects;

use App\Http\Controllers\Controller;
use App\Models\Kanban\KanbanTask;
use Illuminate\Http\Request;

class KanbanTaskController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'status_id' => 'required|exists:kanban_statuses,id',
        ]);

        $task = new KanbanTask();
        $task->title = $request->input('title');
        $task->status_id = $request->input('status_id');
        $task->position = KanbanTask::where('status_id', $task->status_id)->max('position') + 1;
        $task->save();

        return redirect()->route('boards-web.show', $task->status->kanban_board_id);
    }

    public function updateOrder(Request $request)
    {
        $order = $request->input('order');

        foreach ($order as $item) {
            $task = KanbanTask::find($item['id']);
            $task->position = $item['position'];
            $task->status_id = $request->input('status_id');
            $task->save();
        }

        return response()->json(['message' => 'Ordem das tarefas atualizada com sucesso']);
    }
}
