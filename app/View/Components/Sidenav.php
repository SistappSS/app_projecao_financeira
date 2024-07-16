<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Sidenav extends Component
{

    public $route;
    public $label;
    public $icon;

    public function __construct($route, $label, $icon)
    {
        $this->route = $route;
        $this->label = $label;
        $this->icon = $icon;
    }

    public function render(): View|Closure|string
    {
        return view('components.sidenav');
    }
}
