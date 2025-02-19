<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class cataprintLayout extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(public $title = 'Xpora')
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('layouts.cataprint-layout');
    }
}
