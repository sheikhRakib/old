<?php

namespace App\View\Components\Form\Input;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class WithIcon extends Component
{
    public $name;
    public $label;
    public $id;
    public $type;
    public $icon;
    public $value;
    public $placeholder;
    public $disabled;

    public function __construct($name, $label, $id = '', $type = 'text', $icon = 'fa-circle', $placeholder = '', $value = '', $disabled = '')
    {
        $this->name = $name;
        $this->label = $label;
        $this->id = $id ?: $name;
        $this->type = $type;
        $this->icon = $icon;
        $this->placeholder = $placeholder ?: $label;
        $this->value = $value;
        $this->disabled = $disabled;
    }
    
    public function render(): View|Closure|string
    {
        return view('components.form.input.with-icon');
    }
}
