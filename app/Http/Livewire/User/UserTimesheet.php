<?php

namespace App\Http\Livewire\User;

use Livewire\Component;

class UserTimesheet extends Component
{
    public function render()
    {
        return view('livewire.user.user-timesheet')->layout('layouts.base');
    }
}
