<?php

namespace App\Http\Livewire\Admin; 

use Livewire\Component;
use App\Models\Project;
use App\Models\Team;
use App\Models\User; 
use Illuminate\Support\Str; 
use Illuminate\Support\Facades\Auth;

class AdminProjectView extends Component
{
    public $project_id; 
    public $slug;
    public $owner;
    public $start;
    public $end;
    public $comment;
    public $status;
    public $code;
    public $name;


    public function mount($project_id)
    {  
        $proj = Project::where('id', $project_id)->first();
        $this->name = $proj->name;
        $this->slug = $proj->slug;
        $this->owner = $proj->owner;
        $this->comment = $proj->comment;
        $this->status = $proj->status;
        $this->start = $proj->start;
        $this->end = $proj->end;
        $this->code = $proj->code;
    } 


    public function render()
    {
        $teams = Team::where('slug', $this->slug)->get();
        $project= Project::all();
        //$project= Project::where('id', $project_id )->first();
        return view('livewire.admin.admin-project-view', ['teams'=>$teams, 'project'=>$project])->layout('layouts.base');
    }
}
