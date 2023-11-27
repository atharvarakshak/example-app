<?php

namespace App\View\Components\Layouts;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class SongsList extends Component
{
    public $songs=[];
    /**
     * Create a new component instance.
     */
    

    public function __construct()
    {
        this->songs=$song;

        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        
        return view('components.layouts.songs-list');
    }
}
