<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\CommentContentCommunity;
use Illuminate\Http\Request;

class CommunityComment extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // get data Community
        $getCommentCommunity = CommentContentCommunity::join('users', 'users.id', '=', 'comment_content_community.id_user')
            ->orderby('comment_content_community.created_at', 'desc')
            ->select([
                'users.fullname',
                'comment_content_community.id',
                'comment_content_community.comment',
                'comment_content_community.status'
            ])
            ->paginate(10);

        // return page for admin and super admin
        return view('admin.community.comments', compact('getCommentCommunity'));
    }

    public function change_status(Request $request, $id)
    {
        try {
            // change status update
            $getChangeStatus = CommentContentCommunity::find($id);
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
