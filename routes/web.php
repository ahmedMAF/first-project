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

Route::get('/about' , function(){
    $name = request("n");
    $age = request("a");
    return view('about' , compact("name" , "age"));
});

Route::post('/about' , function(){
    //$name = request("n");
    //$age = request("a");
    $name = $_POST['n'];
    $age = $_POST['a'];
    return view('about' , compact("name" , "age"));
});

Route::get('/tasks', function () {
    $task = ["task1" , "task2" , "task3" , "task4"];
    return view('tasks' , compact("task"));
});

Route::get('show/{index}', function ($index) {
    $task = ["task1" , "task2" , "task3" , "task4"];
    $item = $task[$index];
    return view('show' , compact("item"));
});

Route::get('/dataBase' , function(){
    $task = DB::table('tasks')->get();
    return view('taskDB', compact("task"));
});

Route::get('/showDB/{id}' , function($id){
    $task = DB::table('tasks')->find($id);
    return view('showDB', compact("task"));
});