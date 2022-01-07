<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Task;
use Illuminate\Support\Str; 

class AdminCreateTask extends Component
{
    public $task;
    public $code; 
 
    public function generateCode()
    {
        //$this->code ="TSK-".Str::random(5);
        $this->code ="TSK-".rand(0, 9999);
    }

    public function updated($fields)
    { 
        $this->validateOnly($fields, [ 
            'task' => 'required|unique:tasks',
            'code' => 'required|unique:tasks'
        ]);
    } 

    public function createTask()
    {  //form validation before processing
        $this->validate([
            'task' => 'required|unique:tasks',
            'code' => 'required|unique:tasks'
        ]);
        $task = new Task();
        $task->task = $this->task; 
        $task->code = $this->code;
        $task->save();
        $this->dispatchBrowserEvent('success');
    }

    public function render()
    {
        return view('livewire.admin.admin-create-task')->layout('layouts.base');
    }
}
