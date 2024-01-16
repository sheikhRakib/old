<?php

namespace App\View\Components\Form\Textarea;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class WithLabel extends Component
{
    public string $name;
    public string $label;
    public string $id;
    public string $placeholder;
    public string $required;
    public string $readonly;
    public $value;

    public function __construct($label, $name, $id = '', $value = '', $placeholder = '', $required = '', $readonly = '')
    {
        $this->label = $label;
        $this->name = $name;
        $this->id = $id ?: $name;
        $this->value = $value;
        $this->placeholder = $placeholder;
        $this->required = $required;
        $this->readonly = $readonly;
    }

    public function render(): View|Closure|string
    {
        return view('components.form.textarea.with-label');
    }
}
