<?php
 
namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Project;
use App\Models\Team;
use App\Models\User;
use Illuminate\Support\Str; 
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Auth;
use App\Models\ProjectType;

class AdminEditProject extends Component
{
    use WithFileUploads;

    public $name;
    public $slug;
    public $owner;
    public $status;
    public $start;
    public $end;
    public $code;
    public $docs;
    public $project_id;
    public $user_id;
    public $comment;
    public $team_member;
    
    public $members =[];


    public function mount($project_id)
    {
        $project = Project::where('id', $project_id)->first();
        $this->name = $project->name;
        $this->slug = $project->slug;
        $this->owner = $project->owner;
        $this->comment = $project->comment;
        $this->status = $project->status;
        $this->start = $project->start;
        $this->end = $project->end;
        $this->code = $project->code;
    }

    

    public function generateSlug()
    {
        $this->slug = Str::slug($this->name, '-');
    }

    public function updated($fields)
    {
        $this->validateOnly($fields, [
            'name' => 'required',
            'start' => 'required',
            'end' => 'required',
            'status' => 'required',
            'code' => 'require'
        ]);
    } 

    public function updateProject()
    {
        $prj = Project::find($this->project_id);
        $prj->user_id = Auth::user()->id; 
        $prj->name = $this->name; 
        $prj->code = $this->code;
        $prj->owner = $this->owner;
        $prj->comment = $this->comment;
        $prj->status = $this->status;
        $prj->start = $this->start;
        $prj->end = $this->end;
        $prj->save();
        $this->dispatchBrowserEvent('success');
    }


    public function render()
    {
        $types = ProjectType::all();
        $users = User::all();
        return view('livewire.admin.admin-edit-project', ['users'=>$users, 'types'=>$types])->layout('layouts.base');
    }
}
