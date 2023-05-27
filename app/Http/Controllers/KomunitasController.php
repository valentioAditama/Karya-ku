<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KomunitasController extends Controller
{
    // index komunitas
    public function index()
    {
        return view('user.community.community');
    }

    // create komunitas
    public function create()
    {
        return view('user.community.create');
    }

    // review komunitas
    public function review()
    {
        return view('user.community.review');
    }

    // comment details 
    public function reviewComment()
    {
        return view('user.community.commentsDetail');
    }
}
