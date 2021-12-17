<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\department;
use App\Models\Student;
use Carbon\Carbon;

class CrudController extends Controller
{
    function index()
    {
    $students=Student::all();
    return view('home',['students'=>$students]);
    }
    function add()
    {
      return view('addata');
    }

    function store(Request $req)
    {
      $photo =Carbon::now()->timestamp.'.'.$req->image->extension();
      $req->image->storeAs('UserPhoto',$photo);
      $data= new Student;
      $data->name=$req->name;
      $data->email=$req->email;
      $data->image=$photo;
      $data->save();
      return back();
    }

    function edit($id)
    {
      $students = Student::find($id);
      return view('dataview',compact('students'));
    }
    function update(Request $req ,$id)
    {
      $photo =Carbon::now()->timestamp.'.'.$req->image->extension();
      $req->image->storeAs('UserPhoto',$photo);
      $students = Student::find($id);
      $students->name=$req->name;
      $students->email=$req->email;
      $students->image=$photo;
      $students->save();
      return back();
    }


    function delete($id)
    {
       $students = Student::find($id);
       $students->delete();
       return back();

    }
}
