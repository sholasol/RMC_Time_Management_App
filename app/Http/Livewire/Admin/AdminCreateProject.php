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

class AdminCreateProject extends Component
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
    public $user_id;
    public $comment;
    public $team_member;
    public $members =[];

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
            'status' => 'required'
        ]);
    } 

    public function createProject()
    {  //form validation before processing
        $this->validate([
            'name' => 'required',
            'start' => 'required',
            'end' => 'required',
            'status' => 'required'
        ]);

        //Stroring arrays in database
        // $mem = implode(',', $this->members);

        // $team = new Team(); 
        // $team->slug = $this->slug;
        // $team->team_member = $mem;
        // $team->save();


        foreach ($this->members as $member){
            $team = new Team(); 
            $team->slug = $this->code;
            $team->team_member = $member;
            $team->save();
        }



        $proj = new Project();
        $proj->user_id = Auth::user()->id; 
        $proj->name = $this->name; 
        $proj->code = $this->code;
        $proj->owner = $this->owner;
        $proj->comment = $this->comment;
        $proj->status = $this->status;
        $proj->start = $this->start;
        $proj->end = $this->end;
        $proj->save();
        
        
        $this->dispatchBrowserEvent('success');
    }


    public function render()
    {
        $types = ProjectType::all();
        $users = User::all();
        return view('livewire.admin.admin-create-project', ['users'=>$users, 'types' =>$types])->layout('layouts.base');
    }
}
