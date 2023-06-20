<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;

class ProfileController extends Controller
{
    public function index()
    {



        return view('profile.update-profile-information-form');

    }
}
