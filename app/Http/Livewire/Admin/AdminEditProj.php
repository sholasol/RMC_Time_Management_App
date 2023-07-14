<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;

class AdminEditProj extends Component
{
    public function render()
    {
        return view('livewire.admin.admin-edit-proj')->layout('layouts.base');
    }
}
