<?php

namespace App\View\Components\Portal\Navbar;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Request;
use Illuminate\View\Component;

class Item extends Component
{
    public $route;
    public $label;
    public $active;

    public function __construct($route, $label)
    {
        $this->route = $route;
        $this->label = $label;
        $this->active = Request::routeIs($route) ? true : false;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.portal.navbar.item');
    }
}
