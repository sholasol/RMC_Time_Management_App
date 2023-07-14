<?php

namespace App\Http\Livewire\Mgr;

use Livewire\Component;

class MgrDashboard extends Component
{
    public function render()
    {
        return view('livewire.mgr.mgr-dashboard')->layout('layouts.base');
    }
}
