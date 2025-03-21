<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;


Route::get('/', function () {
    return view('home');
});
Route::get('/about/{name}', function ($name) {
   return view('about',["name" =>$name]);
});
Route::get('user',[UserController::class,'get_user']);
Route::get('about/{name}',[UserController::class,'about_user']);

Route::get('login',[UserController::class,'login']);
Route::get('user-home',[UserController::class,'home']);
Route::post('addUser',[UserController::class,'add_user']);
