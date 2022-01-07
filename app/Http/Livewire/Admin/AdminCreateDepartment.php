<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Department;
use App\Models\User;

class AdminCreateDepartment extends Component
{
    public $name;
    public $lead;
    public $comment;

    public function updated($fields)
    {
        $this->validateOnly($fields, [
            'name' => 'required|unique:departments'
        ]);
    } 

    public function createDepartment()
    {  //form validation before processing
        $this->validate([
            'name' => 'required|unique:departments'
        ]);
        $dept = new Department();
        $dept->name = $this->name; 
        $dept->lead = $this->lead;
        $dept->comment = $this->comment;
        $dept->save();
        $this->dispatchBrowserEvent('success');
    }




    public function render()
    {
        $users = User::all();
        return view('livewire.admin.admin-create-department', ['users' =>$users])->layout('layouts.base');
    }
}
