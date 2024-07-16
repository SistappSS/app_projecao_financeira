<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class SelectMultiple extends Component
{
    public $col;
    public $set;
    public $id;
    public $name;
    public $label;

    public function __construct($col = null, $set = null, $label, $id, $name)
    {
        $this->col = $col;
        $this->set = $set;
        $this->id = $id;
        $this->name = $name;
        $this->label = $label;
    }

    public function render(): View|Closure|string
    {
        return view('components.select-multiple');
    }
}
