<?php

namespace App\View\Components;

use Illuminate\View\Component;

class CardHeader extends Component
{
    public $icon;
    public $title;
    public $buttonText;
    public $buttonRoute;
    public $buttonCan;
    public $modalId;

    public function __construct($icon, $title, $buttonText = null, $buttonRoute = null, $buttonCan = null, $modalId = null)
    {
        $this->icon = $icon;
        $this->title = $title;
        $this->buttonText = $buttonText;
        $this->buttonRoute = $buttonRoute;
        $this->buttonCan = $buttonCan;
        $this->modalId = $modalId; // Add this
    }

    public function render()
    {
        return view('components.card-header');
    }
}
