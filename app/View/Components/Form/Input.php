<?php

namespace App\View\Components\Form;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Input extends Component
{
    public $name;
    public $label;
    public $id;
    public $type;
    public $value;
    public $placeholder;
    public $disabled;

    public function __construct($name, $label, $id = '', $type = 'text', $placeholder = '', $value = '', $disabled = '')
    {
        $this->name = $name;
        $this->label = $label;
        $this->id = $id ? $id : $name;
        $this->type = $type;
        $this->placeholder = $placeholder ? $placeholder : $label;
        $this->value = $value;
        $this->disabled = $disabled;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.form.input');
    }
}
