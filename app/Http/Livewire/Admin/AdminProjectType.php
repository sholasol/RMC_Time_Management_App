<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\ProjectType;

class AdminProjectType extends Component
{
    public function deleteType($id)
    {
        $project = ProjectType::find($id);
        $project->delete();
        $this->dispatchBrowserEvent('success');
    }


    public function render()
    {
        $projs= ProjectType::all();
        return view('livewire.admin.admin-project-type', ['projs'=>$projs])->layout('layouts.base');
    }
}
