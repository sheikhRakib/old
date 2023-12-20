<?php

namespace App\View\Components\Portal\Sidebar;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Request;
use Illuminate\View\Component;

class Item extends Component
{
    public $route;
    public $label;
    public $icon;
    public $active;
    public $badge;

    public function __construct($route, $label, $icon, $badge='')
    {
        $this->route = $route;
        $this->label = $label;
        $this->icon = $icon;
        $this->badge = $badge;
        $this->active = Request::routeIs($route) ? true : false;
    }

    public function render(): View|Closure|string
    {
        return view('components.portal.sidebar.item');
    }
}
