<?php

namespace App\View\Components;

use Illuminate\View\Component;

class MostraErros extends Component
{
    public $name;
    public $message;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($name, $message = '$message')
    {
        $this->name = $name;
        $this->message = $message;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.mostra-erros');
    }
}