<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});


Route::get('/contact',[ContactController::class,'show']);

Route::get("/users", function(){
    return view('users');
});

// Route::get('/user/1', function(){
//     return 'you are now 1';
// });

// Route::get('/user/2', function(){
//     return 'you are now 2';
// });

// Route::get('/user/3', function(){
//     return 'you are now 3';
// });

// Route::get('/user/4', function(){
//     return 'you are now 4';
// });

// Route::get("/user/{id}", function($id){
//     return 'you are now'. $id;
// });

Route::get('/user/{id}', function($id){
    $user= DB::table('Users')->where('id',$id)->first();
     if ($user) {
        return $user;
    } else {
        return "User not found.";
    }
});


Route::get('/profiles', [ProfileController::class, 'index'])->name('profiles.index');
Route::get('/profiles/{id}', [ProfileController::class, 'show'])->name('profiles.show');
Route::get('/allusers', [UserController::class, 'allUsers'])->name('alluser.show');
Route::get('/user/{id}', [UserController::class, 'user'])->name('single.user');
