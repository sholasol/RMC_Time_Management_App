<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;

class AdminTaskView extends Component
{
    public function render()
    {
        return view('livewire.admin.admin-task-view')->layout('layouts.bas');
    }
}
