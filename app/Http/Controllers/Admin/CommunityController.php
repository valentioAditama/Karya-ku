<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\CommentContentCommunity;
use App\Models\Community;
use Illuminate\Http\Request;

class CommunityController extends Controller
{

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // get data Community
        $getCommunityData = Community::join('users', 'users.id', '=', 'community.id_user')
            ->join('thumbnail_community', 'thumbnail_community.id_community', '=', 'community.id')
            ->orderby('community.created_at', 'desc')
            ->paginate(10);

        // return page for admin and super admin
        return view('admin.community.community', compact('getCommunityData'));
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
