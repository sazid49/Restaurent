<?php

namespace App\Http\Livewire;

use Livewire\Component;
// use Illuminate\Http\Request;

class ActionComponent extends Component
{
    public $counter;
    public $step;
    // public $hydreat=1;

    function mount()
    {
      $this->counter=0;
      $this->step=1;

    }
    function incriment()
    {
        $this->counter+=$this->step;
    }
    function dicrement()
    {
        $this->counter-=$this->step;
    }
    function hydrete()
    {
      $this->hydreat++;
    }
    public function render()
    {
        return view('livewire.action-component')->layout('layouts.base');
    }
}
