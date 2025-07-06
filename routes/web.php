<?php

use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/contact',[ContactController::class,'show']);

Route::get("/users", function(){
    return view('users');
});

Route::get('/user/1', function(){
    return 'you are now 1';
});

Route::get('/user/2', function(){
    return 'you are now 2';
});

Route::get('/user/3', function(){
    return 'you are now 3';
});

Route::get('/user/4', function(){
    return 'you are now 4';
});
