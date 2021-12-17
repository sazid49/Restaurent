<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\department;
use App\Models\Teacher;

class DropdownComponent extends Component
{
    public $Deparment;
    // public $teachers;
    public function render()
    {
        // $departments=department::all();
        $teacher=Teacher::all();
        return view('livewire.dropdown-component',compact('teacher'))->layout('layouts.base');
    }

    public function updated($dptId)
    {
      $this->teacher=Teacher::where('dpt_id',$dptId)->get();
    }
}
