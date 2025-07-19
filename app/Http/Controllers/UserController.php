<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function allUsers(){
        $allUsersResult= User::all();
        return view('user.index', compact('allUsersResult'));
    }

    public function user($id){
        $singleUser= User::findOrFail($id);
        return view('user.show', compact('singleUser'));
    }

    public function index(User $user){
        return $user;
    }
}
