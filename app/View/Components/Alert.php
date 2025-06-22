<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Alert extends Component
{
    public $type;
    public $message;
    public $icon;
    public $title;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($type, $message, $icon = null, $title = null)
    {
        $this->type = $type;
        $this->message = $message;
        $this->icon = $icon;
        $this->title = $title;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.alert');
    }
}
