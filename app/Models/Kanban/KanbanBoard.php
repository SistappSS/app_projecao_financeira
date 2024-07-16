<?php

namespace App\Models\Kanban;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Kanban\KanbanStatus;

class KanbanBoard extends Model
{
    use HasFactory;

    public function statuses()
    {
        return $this->hasMany(KanbanStatus::class)->orderBy('position');
    }
}
