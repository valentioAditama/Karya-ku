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
            ->join('content_community', 'content_community.id', '=', 'comment_content_community.id_content_community')
            ->join('community', 'community.id', '=', 'content_community.id_community')
            ->orderby('comment_content_community.created_at', 'desc')
            ->select([
                'users.fullname',
                'community.name_community',
                'content_community.description as articel',
                'comment_content_community.id',
                'comment_content_community.comment',
                'comment_content_community.status'
            ])
            ->paginate(10);

        // return page for admin and super admin
        return view('admin.community.comments', compact('getCommentCommunity'));
    }

    public function search(Request $request)
    {
        // get data Community and search it
        $getCommentCommunity = CommentContentCommunity::join('users', 'users.id', '=', 'comment_content_community.id_user')
            ->join('content_community', 'content_community.id', '=', 'comment_content_community.id_content_community')
            ->join('community', 'community.id', '=', 'content_community.id_community')
            ->where('users.fullname', 'like', '%' . $request->search . '%')
            ->orwhere('community.name_community', 'like', '%' . $request->search . '%')
            ->orwhere('content_community.description', 'like', '%' . $request->search . '%')
            ->orwhere('comment_content_community.comment', 'like', '%' . $request->search . '%')
            ->orwhere('content_community.status', 'like', '%' . $request->search . '%')
            ->orderby('comment_content_community.created_at', 'desc')
            ->select([
                'users.fullname',
                'community.name_community',
                'content_community.description as articel',
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
            return redirect()->back()->with(['successStoreData' => 'Status Berhasil Di Ubah']);
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
        try {
            // find data get id
            $data = CommentContentCommunity::find($id);
            $data->delete();

            // return redirect 
            return redirect()->back()->with(['successDeleteData' => 'Data Berhasil Di Simpan']);
        } catch (\Throwable $error) {
            return $error->getMessage();
        }
    }
}
