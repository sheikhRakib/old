<?php

namespace App\View\Components\Portal\Sidebar;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Header extends Component
{
    public $label;
    
    public function __construct($label)
    {
        $this->label = $label;
    }

    public function render(): View|Closure|string
    {
        return view('components.portal.sidebar.header');
    }
}
