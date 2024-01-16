<?php

namespace App\View\Components\Form\Input;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class WithLabel extends Component
{
    public string $name;
    public string $label;
    public string $type;
    public string $id;
    public string $placeholder;
    public string $required;
    public string $readonly;
    public string $hint;
    public $value;

    public function __construct($label, $name, $type = 'text', $id = '', $value = '', $placeholder = '', $hint = '', $required = '', $readonly = '')
    {
        $this->label = $label;
        $this->name = $name;
        $this->type = $type;
        $this->id = $id ?: $name;
        $this->value = $value;
        $this->placeholder = $placeholder;
        $this->required = $required;
        $this->readonly = $readonly;
        $this->hint = $hint;
    }

    public function render(): View|Closure|string
    {
        return view('components.form.input.with-label');
    }
}
