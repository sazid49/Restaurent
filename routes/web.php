<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\StudentComoinent;
use App\Http\Livewire\Search;
use App\Http\Livewire\ActionComponent;
use App\Http\Livewire\DropdownComponent;
use App\Http\Controllers\CrudController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('student',StudentComoinent::class);
Route::get('search',Search::class);
Route::get('action',ActionComponent::class);
Route::get('menu',DropdownComponent::class);

Route::get('eshad',[CrudController::class,'index']);
Route::get('add',[CrudController::class,'add']);
Route::post('store',[CrudController::class,'store']);

Route::get('edit/{id}',[CrudController::class,'edit']);
Route::post('update/{id}',[CrudController::class,'update']);
Route::get('delete/{id}',[CrudController::class,'delete']);
