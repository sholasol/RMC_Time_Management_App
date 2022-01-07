<?php

namespace App\Http\Livewire\User;

use Livewire\Component;
use App\Models\Timesheet;
use App\Models\User;
use App\Models\Project;
use Illuminate\Support\Facades\Auth;

class UserDashboard extends Component
{
    public function render()
    {
        $usrs = User::all();
        $projs = Project::all();
        //$days = DB::table('timesheets')->select('created_at')->distinct()->get();
        //$days = Timesheet::select('project')->distinct()->get();
        $tms = Timesheet::join('users', 'users.id', '=', 'timesheets.user_id' )
        ->where('users.id', Auth::user()->id)
        ->orderby('timesheets.id', 'DESC')
        ->get(['timesheets.*', 'users.fname', 'users.lname']);
        return view('livewire.user.user-dashboard', ['tms'=>$tms, 'projs'=>$projs, 'usrs'=>$usrs])->layout('layouts.base');
    }
}
