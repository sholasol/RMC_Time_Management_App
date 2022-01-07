<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\ProjectType; 
use Illuminate\Support\Str; 

class CreateProjectType extends Component
{
    public $type;
    public $code;

    public function generateCode()
    {
        //$this->code ="RMC-".Str::random(5);
        $this->code ="RMC-".rand(0, 9999);
    }

    public function updated($fields)
    {
        $this->validateOnly($fields, [ 
            'type' => 'required|unique:project_types',
            'code' => 'required|unique:project_types'
        ]);
    } 

    public function createType()
    {  //form validation before processing
        $this->validate([
            'type' => 'required|unique:project_types',
            'code' => 'required|unique:project_types'
        ]);
        $ProjectType = new ProjectType();
        $ProjectType->type = $this->type; 
        $ProjectType->code = $this->code;
        $ProjectType->save();
        $this->dispatchBrowserEvent('success');
    }


    public function render() 
    {
        return view('livewire.admin.create-project-type')->layout('layouts.base');
    }
}
