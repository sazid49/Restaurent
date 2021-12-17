<?php

namespace App\Http\Livewire;
use App\Models\Student;

use Livewire\Component;
use Livewire\WithFileUploads;
use Carbon\Carbon;

class StudentComoinent extends Component
{

    public $name;
    public $email;
    public $image;
    use WithFileUploads;
    public function render()
    {
        $students =Student::all();
        return view('livewire.student-comoinent',compact('students'))->layout('layouts.base');
    }

    public function updated($fiels)
{
  $this->validateOnly($fiels,[
      'image' => 'required|max:1024', // 1MB Max
      'name' => 'required|min:3', // 1MB Max
      'email' => 'required|email', // 1MB Max
  ]);
}



    public function save()
  {
      $this->validate([
        'image' => 'required|max:1024', // 1MB Max
        'name' => 'required', // 1MB Max
        'email' => 'required|email', // 1MB Max
    ]);

    // $photo =Carbon::now()->timestamp.'.'.$this->image->extension();
    // $this->image->storeAs('UserPhoto',$photo);

    if ($this->image) {
          $imagesname = "";
          foreach ($this->image as $key =>$images) {
            $imgName = Carbon::now()->timestamp.$key.'.'.$images->extension();
            $images->storeAs('UserPhoto',$imgName);
            $imagesname = $imagesname.','.$imgName;
          }

      }

    $data = new Student;
    $data->name =$this->name;
    $data->email =$this->email;
    $data->image =$imagesname;
    $data->save();
    session()->flash('success','this photo insert successfully');
}

}
