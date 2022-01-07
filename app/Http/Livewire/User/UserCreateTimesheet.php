<?php

namespace App\Http\Livewire\User;

use Livewire\Component;
use App\Models\Timesheet;
use App\Models\User;
use App\Models\Project;
use Illuminate\Support\Facades\Auth;
use Livewire\WithPagination;

class UserCreateTimesheet extends Component
{
    public $project;
    public $description;
    public $start;
    public $end;
    public $comment;
    public $location;

    public function updated($fields)
    {
        $this->validateOnly($fields, [
            'project' => 'required',
            'location' =>'required',
            'start' => 'required',
            'end' =>'required',
            'description' => 'required'
        ]);
    } 

    public function AddNew()
    {
        $this->dispatchBrowserEvent('show-form');
    }


    public function createTime()
    {  //form validation before processing

        //dd('here');
        
        $this->validate([
            'project' => 'required',
            'location' =>'required',
            'start' => 'required',
            'end' =>'required',
            'description' => 'required'
        ]);

        $st =date('Y-m-d H:i:s');

        $time = new Timesheet(); 
        $time->user_id = Auth::user()->id; 
        $time->project = $this->project; 
        $time->comment = $this->description;
        $time->start = $this->start;
        $time->end = $this->end;
        $time->location = $this->location;
        $time->save();
        $this->dispatchBrowserEvent('success');
    }


    public function render()
    {
        $projs = Project::all();
        //$tms = Timesheet::where('user_id', Auth::user()->id)->paginate(18);
        $tms = Timesheet::join('users', 'users.id', '=', 'timesheets.user_id' )
        ->orderby('timesheets.id', 'DESC')
        ->where('users.id', Auth::user()->id)
        ->get(['timesheets.*', 'users.fname', 'users.lname']);
        return view('livewire.user.user-create-timesheet', ['projs'=>$projs, 'tms'=>$tms])->layout('layouts.base');
    }
}
