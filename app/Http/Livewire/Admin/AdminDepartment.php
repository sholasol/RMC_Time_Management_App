<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Department;

class AdminDepartment extends Component
{

    public function deleteDept($id)
    {
        $dpt = Department::find($id);
        $dpt->delete();
        //session()->flash('message', 'Product has been deleted successfully');
        $this->dispatchBrowserEvent('success');
    }


    public function render()
    {
        $depts = Department::all();
        return view('livewire.admin.admin-department', ['depts'=>$depts])->layout('layouts.base');
    }
}
