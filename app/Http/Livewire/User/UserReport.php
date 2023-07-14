<?php

namespace App\Http\Livewire\User;

use Livewire\Component;
use App\Models\Timesheet;
use App\Models\User;
use App\Models\Project;
use Illuminate\Support\Facades\Auth;

class UserReport extends Component
{
    public function render()
    {
        $usrs = User::all();
        $projs = Project::all();
        //$tms = Timesheet::all();
        $tms = Timesheet::join('users', 'users.id', '=', 'timesheets.user_id' )
        ->orderby('timesheets.id', 'DESC')
        ->where('users.id', Auth::user()->id)
        ->get(['timesheets.*', 'users.fname', 'users.lname']);
        return view('livewire.user.user-report' , ['projs'=>$projs, 'usrs'=>$usrs, 'tms'=>$tms])->layout('layouts.base');
    }
}
