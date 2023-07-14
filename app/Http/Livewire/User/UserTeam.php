<?php

namespace App\Http\Livewire\User;

use Livewire\Component;
use App\Models\User;

class UserTeam extends Component
{
    public function render()
    {
        $usrs = User::all();
        return view('livewire.user.user-team',['usrs'=>$usrs])->layout('layouts.base');
    }
}
