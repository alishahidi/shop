<?php

namespace App\View\Components\Admin\Layout;

use Illuminate\View\Component;

class AdminLayout extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(
        public string $tags = '',
        public string $scripts = '',
    ) {
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.admin.layout.admin-layout');
    }
}
