<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component; 

class AdminViewUserTask extends Component
{ 
    public function render()
    {
        return view('livewire.admin.admin-view-user-task')->layout('layouts.bas');
    }
}
