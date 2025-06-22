<?php

namespace App\View\Components;

use Illuminate\View\Component;

class ActionButtons extends Component
{
    public $cancelRoute;
    public $saveText;
    public $saveIcon;

    public function __construct($cancelRoute, $saveText = 'Save', $saveIcon = 'las la-save')
    {
        $this->cancelRoute = $cancelRoute;
        $this->saveText = $saveText;
        $this->saveIcon = $saveIcon;
    }

    public function render()
    {
        return view('components.action-buttons');
    }
}
