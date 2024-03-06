<?php

namespace App\View\Components\Social;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Links extends Component
{
    public $post;
    public $url;
    /**
     * Create a new component instance.
     */
    public function __construct($post, $url)
    {
        $this->post = $post;
        $this->url = $url;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.social.links');
    }
}
