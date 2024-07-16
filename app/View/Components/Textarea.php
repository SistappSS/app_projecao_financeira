<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Textarea extends Component
{
    public $col;
    public $set;
    public $id;
    public $name;
    public $placeholder;
    public $row;
    public $label;

    public function __construct($col = null, $set = null, $placeholder = null, $row = null, $label, $id, $name)
    {
        $this->col = $col;
        $this->set = $set;
        $this->placeholder = $placeholder;
        $this->row = $row;
        $this->id = $id;
        $this->label = $label;
        $this->name = $name;
    }

    public function render(): View|Closure|string
    {
        return view('components.textarea');
    }
}
