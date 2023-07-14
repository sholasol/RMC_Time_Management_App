<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Department;
use App\Models\User;
use Illuminate\Support\Str;
use Livewire\WithFileUploads;
use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;

class AdminEditUser extends Component
{
    use WithFileUploads;

    public $fname;
    public $lname;
    public $utype; //utype
    public $phone;
    public $email;
    public $password;
    public $department;
    public $image;
    public $profile_photo_path;
    public $user_id;
    public $newimage;

    public function mount($user_id)
    {
        $user = User::where('id', $user_id)->first();
        $this->fname = $user->fname;
        $this->lname = $user->lname;
        $this->email = $user->email;
        $this->phone = $user->phone;
        $this->department = $user->department;
        $this->utype = $user->utype;
        $this->profile_photo_path = $user->profile_photo_path;
        $this->password = $user->password;
    }




    public function updated($fields)
    {
        $this->validateOnly($fields, [
            'fname' => ['required', 'string', 'max:255'],
            'lname' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'phone' => ['required'],
            'department' => ['required'],
            'utype' => ['required']
        ]);
    }


    public function editUsr() {
        $this->validate([
            'fname' => ['required', 'string', 'max:255'],
            'lname' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'phone' => ['required'],
            'department' => ['required'],
            'utype' => ['required']
        ]);

        $usr = User::find($this->user_id);
        $usr->fname = $this->fname;
        $usr->lname = $this->lname;
        $usr->utype = $this->utype;
        $usr->phone = $this->phone;
        $usr->email = $this->email;
        $usr->department = $this->department;
        //if new image is selected
        if($this->newimage)
        {
            $imageName = Carbon::now()->timestamp.'.'.$this->newimage->extension();
            $this->newimage->storeAs('users', $imageName); //storage directory and image name
            $usr->profile_photo_path  = $imageName;
        }
        $usr->save();
        $this->dispatchBrowserEvent('done');
    }



    public function render()
    {
        $depts = Department::all();
        return view('livewire.admin.admin-edit-user', ['depts'=>$depts])->layout('layouts.base');
    }
}
