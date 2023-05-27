<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KomunitasController extends Controller
{
    // index komunitas
    public function index()
    {
        // for user
        return view('user.community.community');
    }

    public function adminPageCommunity()
    {
        // return page for admin and super admin
        return view('admin.community.community');
    }

    public function adminPageComment()
    {
        // return page for admin and super admin
        return view('admin.community.comments');
    }

    // create komunitas
    public function create()
    {
        // create community page 
        return view('user.community.create');
    }

    // review komunitas
    public function review()
    {
        // revuew page for community
        return view('user.community.review');
    }

    // comment details 
    public function reviewComment()
    {
        // comments detail for community
        return view('user.community.commentsDetail');
    }
}
