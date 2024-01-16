<?php

namespace App\View\Components\Ui;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Alert extends Component
{
    public $message;
    public $name;
    public $type;
    public $icon;

    public function __construct($name, $message)
    {
        $this->name = $name;
        $this->message = $message;
        $this->type = [
            'Error' => 'danger',
            'Success' => 'success',
            'Info' => 'info',
            'Warning' => 'warning'
        ];
        $this->icon = [
            'Error' => 'fa-ban',
            'Success' => 'fa-check',
            'Info' => 'fa-info',
            'Warning' => 'fa-exclamation-triangle'
        ];
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.ui.alert');
    }
}
