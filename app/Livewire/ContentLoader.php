<?php

namespace App\Livewire;

use Livewire\Component;

class ContentLoader extends Component
{
    public $selectedMenu = 'dashboard';

    public function render()
    {
        return view('livewire.content-loader');
    }

    public function selectMenu($menu)
    {
        $this->selectedMenu = $menu;
    }
}
