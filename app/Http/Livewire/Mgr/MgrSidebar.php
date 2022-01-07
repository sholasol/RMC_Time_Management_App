<?php

namespace App\Http\Livewire\Mgr;

use Livewire\Component;

class MgrSidebar extends Component
{
    public function render()
    {
        return view('livewire.mgr.mgr-sidebar')->layout('layouts.base');
    }
}
