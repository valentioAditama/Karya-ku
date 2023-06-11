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
            ->select([
                'users.fullname',
                'community.name_community',
                'community.description',
                'community.status',
                'thumbnail_community.path',
                'community.id'
            ])
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

    public function change_status(Request $request, $id)
    {
        try {
            // change status update
            $getChangeStatus = Community::find($id);
            $getChangeStatus->update([
                'status' => $request->status
            ]);

            // return redirect back
            return redirect()->back()->with(['successStore' => 'Status Berhasil Di Ubah']);
        } catch (\Throwable $error) {
            return $error->getMessage();
        }
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
