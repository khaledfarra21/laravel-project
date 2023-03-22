<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('above', function () {
 $name = "Khaled"; 
 return view('above' , compact('name'));
});

Route::get('task2', function(){
    $task2 = ['Task1' , 'Task2' , 'Task3'];
    return view('task2' , compact('task2'));

});

Route::get('show/{id}', function($id){
    $task2 = ['Task1' , 'Task2' , 'Task3'];

    $task = $task2[$id];

    return view('show', compact('task'));

});