<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;

class AdminReport extends Component
{
    public function render()
    {
        return view('livewire.admin.admin-report')->layout('layouts.dashboard');
    }
}
