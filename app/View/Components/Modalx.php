<?php

namespace App\View\Components;

use Closure;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class Modalx extends Component
{

    public $title;
    public $submitLabel;

    /**
     * Create a new component instance.
     */
    public function __construct($title = '', $submitLabel = 'Submit')
    {
        $this->title = $title;
        $this->submitLabel = $submitLabel;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.modalx');
    }
}
