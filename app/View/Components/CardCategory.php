<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class CardCategory extends Component
{
    public $image;
    public $price;
    public $desc;
    /**
     * Create a new component instance.
     */
    public function __construct($image, $price, $desc)
    {
        $this->image = $image;
        $this->price = $price;
        $this->desc = $desc;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.card-category');
    }
}
