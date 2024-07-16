<?php

namespace App\Models\Kanban;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Kanban\KanbanBoard;
use App\Models\Kanban\KanbanTask;

class KanbanStatus extends Model
{
    use HasFactory;

    public function board()
    {
        return $this->belongsTo(KanbanBoard::class);
    }

    public function tasks()
    {
        return $this->hasMany(KanbanTask::class)->orderBy('position');
    }
}
