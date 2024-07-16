<?php

namespace App\Http\Controllers\API\Projects;

use App\Http\Controllers\Controller;
use App\Models\Kanban\KanbanStatus;
use Illuminate\Http\Request;

class KanbanStatusController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'kanban_board_id' => 'required|exists:kanban_boards,id',
        ]);

        $status = new KanbanStatus();
        $status->name = $request->input('name');
        $status->kanban_board_id = $request->input('kanban_board_id');
        $status->position = KanbanStatus::where('kanban_board_id', $status->kanban_board_id)->max('position') + 1;
        $status->save();

        return redirect()->route('boards-web.show', $status->kanban_board_id);
    }

    public function updateOrder(Request $request)
    {
        $order = $request->input('order');

        foreach ($order as $item) {
            $status = KanbanStatus::find($item['id']);
            $status->position = $item['position'];
            $status->save();
        }

        return response()->json(['message' => 'Ordem dos status atualizada com sucesso']);
    }
}
