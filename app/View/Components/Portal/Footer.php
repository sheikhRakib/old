<?php

namespace App\View\Components\Portal;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Footer extends Component
{
    public function __construct() {}

    public function render(): View|Closure|string
    {
        return view('components.portal.footer');
    }
}
