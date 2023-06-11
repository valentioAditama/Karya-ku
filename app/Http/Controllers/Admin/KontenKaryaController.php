<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Content;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KontenKaryaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Get Data ALl From Content
        $getDataContent = DB::table('content')
            ->join('users', 'users.id', '=', 'content.id_user')
            ->join('thumbnail_content', 'thumbnail_content.id_content', '=', 'content.id')
            ->join('image_content', 'image_content.id_content', '=', 'content.id')
            ->leftJoin('video_content', function ($join) {
                $join->on('video_content.id_content', '=', 'content.id')
                    ->orWhereNull('video_content.id_content');
            })
            ->get([
                'users.fullname',
                'content.id',
                'content.title',
                'content.sub_title',
                'content.description',
                'content.category',
                'thumbnail_content.path as path_thumbnail',
                'image_content.path as path_image',
                'video_content.path as path_video',
                'content.status',
                'content.created_at'
            ]);

        // return view content karya
        return view('admin.content-karya.index', compact('getDataContent'));
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
            $getChangeStatus = Content::find($id);
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
