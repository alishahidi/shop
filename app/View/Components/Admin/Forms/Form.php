<?php

namespace App\View\Components\Admin\Forms;

use Illuminate\View\Component;

class Form extends Component
{
    private $type;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(
        public string $href,
        public string $method,
    ) {
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        $this->type = (strtolower($this->method) == 'put' || strtolower($this->method) == 'delete') ? strtoupper($this->method) : null;
        if (strtolower($this->method) == 'put')
            $this->method = 'POST';
        elseif (strtolower($this->method) == 'delete')
            $this->method = 'POST';
        else
            $this->method = strtoupper($this->method);
        return view('components.admin.forms.form', [
            'method' => $this->method,
            'href' => $this->href,
            'type' => $this->type
        ]);
    }
}
