<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Status extends Component
{
    public $type;
    public $growth;
    public $number;
    public $title;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($type, $growth, $number, $title)
    {
        $this->type = $type;
        $this->growth = $growth;
        $this->number = $number;
        $this->title = $title;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.status');
    }
}
