<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class Redirect extends Component
{
    public function verifyforCheckout()
    {
        if(Auth::user()->utype ==='ADM')
        {
            return redirect()->route('admin.dashboard');
        }
        elseif(Auth::user()->utype ==='MGR')
        {
            return redirect()->route('mgr.dashboard');
        }
        elseif(Auth::user()->utype ==='USR')
        {
            return redirect()->route('user.dashboard');
        }
    }

    public function render()
    {
        $this->verifyforCheckout();
        return view('livewire.redirect');
    }
}
