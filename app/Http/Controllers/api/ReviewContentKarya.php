<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Content;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ReviewContentKarya extends Controller
{
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
        return response()->json([
            'code' => 200, 
            'status' => 'OK',
            'data' => compact('getDataContent', 'getDataRandomContent')
        ], 200);
    }
}
