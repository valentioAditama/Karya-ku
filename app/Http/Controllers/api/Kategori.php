<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Kategori extends Controller
{
    public function fotografi()
    {
        // get data all in appropriate for category
        $getDataContent = DB::table('content')
            ->join('users', 'users.id', '=', 'content.id_user')
            ->join('thumbnail_content', 'thumbnail_content.id_content', '=', 'content.id')
            ->where('content.category', '=', 'Fotografi')
            ->where('content.status', '=', 'active')
            ->orderBy('created_at', 'DESC')
            ->get([
                'content.id',
                'users.fullname',
                'users.image_profile as image_profile',
                'content.title',
                'content.sub_title',
                'thumbnail_content.path',
                'content.status',
                'content.created_at'
            ]);

            return response()->json([
                'code' => 200, 
                'status' => 'OK',
                'Data' => $getDataContent 
            ], 200);
    }

    public function desain_grafis()
    {
        // get data all in appropriate for category
        $getDataContent = DB::table('content')
            ->join('users', 'users.id', '=', 'content.id_user')
            ->join('thumbnail_content', 'thumbnail_content.id_content', '=', 'content.id')
            ->where('content.category', '=', 'Desain Grafis')
            ->where('content.status', '=', 'active')
            ->orderBy('created_at', 'DESC')
            ->get([
                'content.id',
                'users.fullname',
                'users.image_profile as image_profile',
                'content.title',
                'content.sub_title',
                'thumbnail_content.path',
                'content.status',
                'content.created_at'
            ]);

            return response()->json([
                'code' => 200, 
                'status' => 'OK',
                'Data' => $getDataContent 
            ], 200);
    }

    public function seni_lukis()
    {
        // get data all in appropriate for category
        $getDataContent = DB::table('content')
            ->join('users', 'users.id', '=', 'content.id_user')
            ->join('thumbnail_content', 'thumbnail_content.id_content', '=', 'content.id')
            ->where('content.category', '=', 'Seni Lukis')
            ->where('content.status', '=', 'active')
            ->orderBy('created_at', 'DESC')
            ->get([
                'content.id',
                'users.fullname',
                'users.image_profile as image_profile',
                'content.title',
                'content.sub_title',
                'thumbnail_content.path',
                'content.status',
                'content.created_at'
            ]);

            return response()->json([
                'code' => 200, 
                'status' => 'OK',
                'Data' => $getDataContent 
            ], 200);
    }

    public function tulisan_kreatif()
    {
        // get data all in appropriate for category
        $getDataContent = DB::table('content')
            ->join('users', 'users.id', '=', 'content.id_user')
            ->join('thumbnail_content', 'thumbnail_content.id_content', '=', 'content.id')
            ->where('content.category', '=', 'Tulisan Kreatif')
            ->where('content.status', '=', 'active')
            ->orderBy('created_at', 'DESC')
            ->get([
                'content.id',
                'users.fullname',
                'users.image_profile as image_profile',
                'content.title',
                'content.sub_title',
                'thumbnail_content.path',
                'content.status',
                'content.created_at'
            ]);

            return response()->json([
                'code' => 200, 
                'status' => 'OK',
                'Data' => $getDataContent 
            ], 200);
    }

    public function musik()
    {
        // get data all in appropriate for category
        $getDataContent = DB::table('content')
            ->join('users', 'users.id', '=', 'content.id_user')
            ->join('thumbnail_content', 'thumbnail_content.id_content', '=', 'content.id')
            ->where('content.category', '=', 'Musik dan Audio')
            ->where('content.status', '=', 'active')
            ->orderBy('created_at', 'DESC')
            ->get([
                'content.id',
                'users.fullname',
                'users.image_profile as image_profile',
                'content.title',
                'content.sub_title',
                'thumbnail_content.path',
                'content.status',
                'content.created_at'
            ]);

            return response()->json([
                'code' => 200, 
                'status' => 'OK',
                'Data' => $getDataContent 
            ], 200);
    }

    public function video_film_pendek()
    {
        // get data all in appropriate for category
        $getDataContent = DB::table('content')
            ->join('users', 'users.id', '=', 'content.id_user')
            ->join('thumbnail_content', 'thumbnail_content.id_content', '=', 'content.id')
            ->where('content.category', '=', 'Video dan Film Pendek')
            ->where('content.status', '=', 'active')
            ->orderBy('created_at', 'DESC')
            ->get([
                'content.id',
                'users.fullname',
                'users.image_profile as image_profile',
                'content.title',
                'content.sub_title',
                'thumbnail_content.path',
                'content.status',
                'content.created_at'
            ]);

            return response()->json([
                'code' => 200, 
                'status' => 'OK',
                'Data' => $getDataContent 
            ], 200);
    }

    public function kerajinan_tangan()
    {
        // get data all in appropriate for category
        $getDataContent = DB::table('content')
            ->join('users', 'users.id', '=', 'content.id_user')
            ->join('thumbnail_content', 'thumbnail_content.id_content', '=', 'content.id')
            ->where('content.category', '=', 'Kerajinan Tangan')
            ->where('content.status', '=', 'active')
            ->orderBy('created_at', 'DESC')
            ->get([
                'content.id',
                'users.fullname',
                'users.image_profile as image_profile',
                'content.title',
                'content.sub_title',
                'thumbnail_content.path',
                'content.status',
                'content.created_at'
            ]);

            return response()->json([
                'code' => 200, 
                'status' => 'OK',
                'Data' => $getDataContent 
            ], 200);
    }

    public function kuliner()
    {
        // get data all in appropriate for category
        $getDataContent = DB::table('content')
            ->join('users', 'users.id', '=', 'content.id_user')
            ->join('thumbnail_content', 'thumbnail_content.id_content', '=', 'content.id')
            ->where('content.category', '=', 'Kuliner')
            ->where('content.status', '=', 'active')
            ->orderBy('created_at', 'DESC')
            ->get([
                'content.id',
                'users.fullname',
                'users.image_profile as image_profile',
                'content.title',
                'content.sub_title',
                'thumbnail_content.path',
                'content.status',
                'content.created_at'
            ]);

            return response()->json([
                'code' => 200, 
                'status' => 'OK',
                'Data' => $getDataContent 
            ], 200);
    }

    public function mode_dan_busana()
    {
        // get data all in appropriate for category
        $getDataContent = DB::table('content')
            ->join('users', 'users.id', '=', 'content.id_user')
            ->join('thumbnail_content', 'thumbnail_content.id_content', '=', 'content.id')
            ->where('content.category', '=', 'Mode dan Busana')
            ->where('content.status', '=', 'active')
            ->orderBy('created_at', 'DESC')
            ->get([
                'content.id',
                'users.fullname',
                'users.image_profile as image_profile',
                'content.title',
                'content.sub_title',
                'thumbnail_content.path',
                'content.status',
                'content.created_at'
            ]);

            return response()->json([
                'code' => 200, 
                'status' => 'OK',
                'Data' => $getDataContent 
            ], 200);
    }

    public function teknologi_dan_inovasi()
    {
        // get data all in appropriate for category
        $getDataContent = DB::table('content')
            ->join('users', 'users.id', '=', 'content.id_user')
            ->join('thumbnail_content', 'thumbnail_content.id_content', '=', 'content.id')
            ->where('content.category', '=', 'Teknologi dan Inovasi')
            ->where('content.status', '=', 'active')
            ->orderBy('created_at', 'DESC')
            ->get([
                'content.id',
                'users.fullname',
                'users.image_profile as image_profile',
                'content.title',
                'content.sub_title',
                'thumbnail_content.path',
                'content.status',
                'content.created_at'
            ]);

            return response()->json([
                'code' => 200, 
                'status' => 'OK',
                'Data' => $getDataContent 
            ], 200);
    }
}
