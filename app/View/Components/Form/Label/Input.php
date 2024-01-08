<?php

namespace App\View\Components\Form\Label;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Input extends Component
{
    public string $name;
    public string $label;
    public string $type;
    public string $id;
    public string $value;
    public string $placeholder;
    public string $required;
    public string $readonly;

    public function __construct($label, $name, $type='text', $id='', $value='', $placeholder='', $required='', $readonly='')
    {
        $this->label = $label;
        $this->name = $name;
        $this->type = $type;
        $this->id = $id ?: $name;
        $this->value = $value;
        $this->placeholder = $placeholder;
        $this->required = $required;
        $this->readonly = $readonly;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.form.label.input');
    }
}
