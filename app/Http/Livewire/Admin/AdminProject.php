<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Project;
use App\Models\Team;
use App\Models\User; 
use Illuminate\Support\Str; 
use Illuminate\Support\Facades\Auth;

class AdminProject extends Component
{
    public function deleteProject($id)
    {
        $project = Project::find($id);
        $project->delete();
        $this->dispatchBrowserEvent('success');
    }

    public function render()
    {
        $projs = Project::all();
        return view('livewire.admin.admin-project', ['projs'=>$projs])->layout('layouts.base');
    }
}
