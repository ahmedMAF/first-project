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
    $name = request("n");
    $age = request("a");
    return view('about' , compact("name" , "age"));
});