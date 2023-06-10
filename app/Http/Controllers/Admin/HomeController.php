<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\CommentContentCommunity;
use App\Models\Community;
use App\Models\ContactUs;
use App\Models\Laporan;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // get data users for home dashboard
        $getUsersData = User::orderby('created_at', 'desc')->paginate(10);

        // get data laporan
        $getLaporanData = Laporan::join('users', 'users.id', '=', 'laporan.id_user')
            ->orderby('laporan.created_at', 'desc')
            ->paginate(10);

        // get data Community
        $getCommunityData = Community::join('users', 'users.id', '=', 'community.id_user')
            ->orderby('community.created_at', 'desc')
            ->paginate(10);

        // get data Community comments
        $getCommentsData = CommentContentCommunity::join('users', 'users.id', '=', 'comment_content_community.id_user')
            ->orderby('comment_content_community.created_at', 'desc')
            ->paginate(10);

        // get Data Contact Us
        $getContactUsData = ContactUs::join('users', 'users.id', '=', 'contact_us.id_user')
            ->orderby('contact_us.created_at', 'desc')
            ->paginate(10);

        return view('admin.home.home', compact('getUsersData', 'getLaporanData', 'getCommunityData', 'getCommentsData', 'getContactUsData'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
