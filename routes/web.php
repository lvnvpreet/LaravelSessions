<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('welcome');
});


Route::view('login', 'login');
Route::view('profile', 'profile');
Route::view('user', 'user');

Route::post('login', [UserController::class,'logIn']);
Route::get('logout', [UserController::class,'logOut']);
Route::post('adduser', [UserController::class,'addUser']);