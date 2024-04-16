<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('/register',[LoginController::class,'registerview'] )->name('register');
Route::post('/register',[LoginController::class,'register'] );

Route::get('/login',[LoginController::class,'loginview'] )->name('login');
Route::post('/login',[LoginController::class,'login'] );

Route::get('/homepage',[LoginController::class,'homepage'] )->name('homepage');

Route::get('/logout',[LoginController::class,'logout'] )->name('logout');
