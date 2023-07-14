<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Timesheet;
use App\Models\User;
use App\Models\Project;
use Illuminate\Support\Facades\Auth; 

class AdminCreateTimesheet extends Component
{

    public function approveAct($id)
    {
        Timesheet::where('id', $id)->update([
            'approved_by' => Auth::user()->id 
        ]);
        $this->dispatchBrowserEvent('success');
    }

    public function render()
    {
        $usrs = User::all();
        $projs = Project::all();
        //$tms = Timesheet::all();
        $tms = Timesheet::join('users', 'users.id', '=', 'timesheets.user_id' )
        ->orderby('timesheets.id', 'DESC')
        ->get(['timesheets.*', 'users.fname', 'users.lname']);
        return view('livewire.admin.admin-create-timesheet', ['projs'=>$projs, 'usrs'=>$usrs, 'tms'=>$tms])->layout('layouts.base'); 
    }
}
