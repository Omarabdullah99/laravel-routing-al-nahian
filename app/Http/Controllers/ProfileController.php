<?php

namespace App\Http\Controllers;

use App\Models\Profile;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
       public function index()
    {
        $profiles = Profile::all();
        return view('profiles.index', compact('profiles'));
    }

    // নির্দিষ্ট প্রোফাইল দেখাবে
    public function show($id)
    {
        $profile = Profile::findOrFail($id);
        return view('profiles.show', compact('profile'));
    }
    //
}
