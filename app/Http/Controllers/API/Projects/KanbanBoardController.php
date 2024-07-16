<?php

namespace App\Http\Controllers\API\Projects;

use App\Http\Controllers\Controller;
use App\Models\Kanban\KanbanBoard;
use Illuminate\Http\Request;

class KanbanBoardController extends Controller
{
    public function index()
    {
        $boards = KanbanBoard::orderBy('position')->get();
        return view('app.boards.index', compact('boards'));
    }

    public function create()
    {
        return view('app.boards.create');
    }

    public function store(Request $request)
    {
        $board = new KanbanBoard();
        $board->name = $request->input('name');
        $board->position = KanbanBoard::max('position') + 1;
        $board->save();

        return redirect()->route('boards-web.index');
    }

    public function show(KanbanBoard $board)
    {
        $board->load('statuses.tasks');
        return view('app.boards.show', compact('board'));
    }

    public function updateOrder(Request $request)
    {
        $order = $request->input('order');

        foreach ($order as $item) {
            $board = KanbanBoard::find($item['id']);
            $board->position = $item['position'];
            $board->save();
        }

        return response()->json(['message' => 'Ordem dos quadros atualizada com sucesso']);
    }
}
