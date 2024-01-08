<?php

namespace App\View\Components\Form;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Button extends Component
{
    public string $label;
    public string $type;

    public function __construct($label, $type = 'submit')
    {
        $this->label = $label;
        $this->type = $type;
    }

public function render(): View|Closure|string
    {
        return view('components.form.button');
    }
}
