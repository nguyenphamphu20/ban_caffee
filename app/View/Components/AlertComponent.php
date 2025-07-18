<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class AlertComponent extends Component
{
    public $type;
    public $content;
    public function __construct($type = "", $content = "")
    {
        $this->type = $type;
        $this->content = $content;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.alert-component');
    }
}