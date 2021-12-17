<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Student;

class Search extends Component
{

    public $search_Data;
    public $name="Ahmad Sazid";
    public $data="placegolder data";

    function Mount()
    {
      $this->name="Fahim";
    }

    public function render()
    {
        if (is_null($this->search_Data)) {
            $students=Student::all();
        }else {
            $students=Student::where('name','Like','%'.$this->search_Data.'%')
            ->orWhere('email','Like','%'.$this->search_Data.'%')->get();
        }


        return view('livewire.search',compact('students'))->layout('layouts.base');
    }
}
