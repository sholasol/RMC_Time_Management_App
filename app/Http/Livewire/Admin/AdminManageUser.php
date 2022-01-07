<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\User;

class AdminManageUser extends Component
{
    public function render()
    {
        $usrs = User::all();
        return view('livewire.admin.admin-manage-user',['usrs'=>$usrs])->layout('layouts.base'); 
    }
}
