<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class BankComponent extends Component
{
    public $nameBank;
    public $numberBank;
    public $name;
    public $expired;

    public function __construct($name, $nameBank, $numberBank, $expired)
    {
        $this->name = $name;
        $this->nameBank = $nameBank;
        $this->numberBank = $numberBank;
        $this->expired = $expired;
    }

    public function render(): View|Closure|string
    {
        return view('components.bank-component');
    }
}