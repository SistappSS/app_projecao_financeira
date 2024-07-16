<?php

namespace App\Models\Kanban;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Kanban\KanbanStatus;

class KanbanTask extends Model
{
    use HasFactory;

    public function status()
    {
        return $this->belongsTo(KanbanStatus::class);
    }
}
