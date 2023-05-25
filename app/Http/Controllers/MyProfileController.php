<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyProfileController extends Controller
{
    public function index()
    {
        return view('user.my-profile.my-profle');
    }

    public function my_karya()
    {
        return view('user.my-profile.my-karya');
    }

    public function login_change_password()
    {
        return view('user.my-profile.login-change-password');
    }

    public function reset_password()
    {
        return view('user.my-profile.reset-password');
    }
}
