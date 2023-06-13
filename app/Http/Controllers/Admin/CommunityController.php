<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\CommentContentCommunity;
use App\Models\Community;
use App\Models\ThumbnailCommunity;
use App\Models\ThumbnailContent;
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
        try {
            // validate data 
            $validated = $request->validate([
                'name_community' => 'required',
                'description' => 'required',
                'thumbnail_community' => 'required'
            ]);

            // Get Id Community and store data community, path thumbnail to table
            $getIdCommunity = Community::create($validated);

            // create path Thumbnail
            $pathThumbnail = $request->file('thumbnail_community')->store('public/community/thumbnail/');
            ThumbnailCommunity::create([
                'id_community' => $getIdCommunity->id,
                'path' => substr($pathThumbnail, 27)
            ]);

            // return redirect back
            return redirect()->back()->with(['successStore' => 'Data Berhasil Di Simpan']);
        } catch (\Throwable $error) {
            return $error->getMessage();
        }
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
        try {
            // Get Id Community and store data community, path thumbnail to table
            $getIdCommunity = Community::find($id);
            $getIdCommunity->update([
                'name_community' => $request->name_community,
                'description' => $request->description,
                'thumbnail_community' => $request->thumbnail_community,
            ]);

            // Store path Thumbnail
            $pathThumbnail = $request->file('thumbnail_community')->store('public/community/thumbnail/');
            $getDataThumbnail = ThumbnailContent::where('id_community', '=', $getIdCommunity)
                ->first();

            $getDataThumbnail->update([
                'id_community' => $getIdCommunity->id,
                'path' => substr($pathThumbnail, 27)
            ]);

            // return redirect back
            return redirect()->back()->with(['successStore' => 'Data Berhasil Di Ubah']);
        } catch (\Throwable $error) {
            return $error->getMessage();
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            // Get Id Community and store data community, path thumbnail to table
            $getIdCommunity = Community::find($id);

            // Store path Thumbnail
            $getDataThumbnail = ThumbnailContent::where('id_community', '=', $getIdCommunity)->first();

            // get data thumbnail
            $getDataThumbnail->delete();

            // return redirect back
            return redirect()->back()->with(['successStore' => 'Data Berhasil Di Ubah']);
        } catch (\Throwable $error) {
            return $error->getMessage();
        }
    }
}
