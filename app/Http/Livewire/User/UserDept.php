<?php

namespace App\Http\Livewire\User;

use Livewire\Component;
use App\Models\Department;

class UserDept extends Component
{
    public function render()
    {
        $depts = Department::all();
        return view('livewire.user.user-dept', ['depts'=>$depts])->layout('layouts.base');
    }
}
