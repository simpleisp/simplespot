<?php

namespace App\View\Components;

use Illuminate\View\Component;

class DeleteModal extends Component
{
    public $route;
    public $message;
    public $method;

    public function __construct($route, $message = 'Deleting this will remove all related data.', $method = 'delete')
    {
        $this->route = $route;
        $this->message = $message;
        $this->method = $method;
    }

    public function render()
    {
        return view('components.delete-modal');
    }
}
