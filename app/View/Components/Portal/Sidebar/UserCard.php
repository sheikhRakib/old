<?php

namespace App\View\Components\Portal\Sidebar;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class UserCard extends Component
{
    public function __construct() {}

    public function render(): View|Closure|string
    {
        return view('components.portal.sidebar.user-card');
    }
}
