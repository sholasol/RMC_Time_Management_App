<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;

class AdminSidebar extends Component
{
    public function render()
    {
        return view('livewire.admin.admin-sidebar')->layout('layouts.base');
    }
}
