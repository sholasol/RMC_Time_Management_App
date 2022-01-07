<?php

namespace App\Http\Livewire\User;

use Livewire\Component;
use App\Models\Project;
use App\Models\Team;
use App\Models\User; 
use Illuminate\Support\Str; 
use Illuminate\Support\Facades\Auth;

class UserProject extends Component
{
    public function render()
    {
        $projs = Project::all();
        return view('livewire.user.user-project', ['projs'=>$projs])->layout('layouts.base');
    }
}
 