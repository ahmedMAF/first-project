<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;

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

Route::get('/app', [TaskController::class , "app"]);
Route::get('/tasks', [TaskController::class , "tasks"]);
Route::post('/insert', [TaskController::class , "insert"]);
Route::delete('/delete/{id}', [TaskController::class , "delete"]);
Route::put('/update/{id}', [TaskController::class , "update"]);


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

/*
Route::get('/tasks', function () {
    $task = ["task1" , "task2" , "task3" , "task4"];
    return view('tasks' , compact("task"));
});
*/
/*
Route::get('/dbop' , function(){
    $task = DB::table('tasks')->get();
    return view('DBop', compact("task"));
});

Route::post('/insert', function () {
    DB::table('tasks')->insert(["name"=>$_POST["name"] , "created_at"=>$_POST["create"] , "updated_at"=>$_POST["update"]]);
    $task = DB::table('tasks')->get();
    return view('DBop', compact("task"));
});

Route::post('/delete', function () {
    $id = $_POST["id"];
    DB::table('tasks')->where("id" , $id)->delete();
    $task = DB::table('tasks')->get();
    return view('DBop', compact("task"));
});

Route::post('/update', function () {
    DB::table('tasks')->where("id" , $_POST["idUpdate"])->update(["name"=>$_POST["nameUpdate"]]);
    $task = DB::table('tasks')->get();
    return view('DBop', compact("task"));
});
*/

