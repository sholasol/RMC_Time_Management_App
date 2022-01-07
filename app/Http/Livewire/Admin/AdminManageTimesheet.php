<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Timesheet;
use App\Models\User;
use App\Models\Project;
use App\Models\Task;
use Illuminate\Support\Facades\Auth;

class AdminManageTimesheet extends Component
{
    public $project;
    public $description;
    public $start;
    public $end;
    public $comment;
    public $location;
    public $task;
    public $code;


    public function updated($fields)
    {
        $this->validateOnly($fields, [
            'project' => 'required',
            'location' =>'required',
            'start' => 'required',
            'end' =>'required',
            'task' =>'required',
            'code' =>'required',
            'description' => 'required'
        ]);
    }  

    public function approveAct($id)
    {
        Timesheet::where('id', $id)->update([
            'approved_by' => Auth::user()->id 
        ]);
        $this->dispatchBrowserEvent('success');
    }

    public function disApprove($id)
    {

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
            'task' =>'required',
            'code' =>'required',
            'description' => 'required'
        ]); 

        $st =date('Y-m-d H:i:s');

        $time = new Timesheet(); 
        $time->user_id = Auth::user()->id; 
        $time->project = $this->project; 
        $time->comment = $this->description;
        $time->start = $this->start;
        $time->end = $this->end;
        $time->task = $this->task;
        $time->code = $this->code;
        $time->location = $this->location;
        $time->save();
        //$lastid = $time->id;
        $this->dispatchBrowserEvent('success');
    }


    public function render()
    {
        $projs = Project::all();
        $tasks = Task::all();
        $tms = Timesheet::join('users', 'users.id', '=', 'timesheets.user_id' )
        ->orderby('timesheets.id', 'DESC')
        ->get(['timesheets.*', 'users.fname', 'users.lname']);
        return view('livewire.admin.admin-manage-timesheet', ['projs'=>$projs, 'tms'=>$tms, 'tasks'=>$tasks])->layout('layouts.base'); 
    }
}
