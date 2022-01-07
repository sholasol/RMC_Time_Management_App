<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Task;

class AdminTask extends Component
{
    public $task;
    public $code;

    public function deleteTask($id)
    {
        $tsk = Task::find($id);
        $tsk->delete();
        $this->dispatchBrowserEvent('success');
    }

    public function render()
    {
        $tasks = Task::all();
        return view('livewire.admin.admin-task', ['tasks'=>$tasks])->layout('layouts.base');
    }
}
