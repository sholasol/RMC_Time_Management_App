<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Timesheet;
use App\Models\User;
use App\Models\Project;
use Illuminate\Support\Facades\Auth;

class AdminDashboard extends Component
{
    public $days = []; 

    public function mount()
    {
        $this->days = collect(range(10, 30))->map(function($number){
            return 'Jun' . $number;
        });
    }

    public function render()
    {
        $usrs = User::all();
        $projs = Project::all();
        //$days = DB::table('timesheets')->select('created_at')->distinct()->get();
        //$days = Timesheet::select('project')->distinct()->get();
        $tms = Timesheet::join('users', 'users.id', '=', 'timesheets.user_id' )
        ->orderby('timesheets.id', 'DESC')
        ->get(['timesheets.*', 'users.fname', 'users.lname']);

        return view('livewire.admin.admin-dashboard', ['tms'=>$tms, 'projs'=>$projs, 'usrs'=>$usrs])->layout('layouts.base');
    }
}
 