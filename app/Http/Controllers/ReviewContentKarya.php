<?php

namespace App\Http\Controllers;

use App\Models\Content;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ReviewContentKarya extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($id)
    {
        // Get Data Id From Content and join data
        $getIdContent = Content::find($id);

        $getDataContent = DB::table('content')
            ->join('users', 'users.id', '=', 'content.id_user')
            ->join('thumbnail_content', 'thumbnail_content.id_content', '=', 'content.id')
            ->join('image_content', 'image_content.id_content', '=', 'content.id')
            ->leftJoin('video_content', function ($join) {
                $join->on('video_content.id_content', '=', 'content.id')
                    ->orWhereNull('video_content.id_content');
            })
            ->select([
                'users.fullname',
                'content.title',
                'content.sub_title',
                'content.description',
                'thumbnail_content.path as path_thumbnail',
                'image_content.path as path_image',
                'video_content.path as path_video',
                'content.status',
                'content.created_at'
            ])
            ->where('content.id', '=', $id)->first();

        // get data random from content
        $getDataRandomContent = DB::table('content')
            ->join('users', 'users.id', '=', 'content.id_user')
            ->join('thumbnail_content', 'thumbnail_content.id_content', '=', 'content.id')
            ->inRandomOrder()
            ->get([
                'content.id',
                'users.fullname',
                'content.title',
                'content.sub_title',
                'content.description',
                'thumbnail_content.path',
                'content.status',
                'content.created_at'
            ]);

        // return view for users
        return view('user.review-content.review-content', compact('getDataContent', 'getDataRandomContent'));
    }

    public function adminPage()
    {
        // return view for admin and super-admin
        return view('admin.content-karya.content-karya');
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
