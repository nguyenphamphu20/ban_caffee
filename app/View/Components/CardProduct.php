<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class CardProduct extends Component
{
    public $title;
    public $desc;
    public $taste;
    public $resource;
    public $price;
    public $image;
    public function __construct($title, $desc, $taste, $resource, $price, $image)
    {
        $this->title = $title;
        $this->desc = $desc;
        $this->taste = $taste;
        $this->resource = $resource;
        $this->price = $price;
        $this->image = $image;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.card-product');
    }
}
