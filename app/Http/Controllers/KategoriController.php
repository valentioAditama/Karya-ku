<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KategoriController extends Controller
{
    public function index()
    {
        return view('user.category.category');
    }

    public function fotografi()
    {
        // get data all in appropriate for category
        $getDataContent = DB::table('content')
            ->join('users', 'users.id', '=', 'content.id_user')
            ->join('thumbnail_content', 'thumbnail_content.id_content', '=', 'content.id')
            ->where('content.category', '=', 'Fotografi')
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

        return view('user.category.fotografi', compact('getDataContent'));
    }

    public function desain_grafis()
    {
        // get data all in appropriate for category
        $getDataContent = DB::table('content')
            ->join('users', 'users.id', '=', 'content.id_user')
            ->join('thumbnail_content', 'thumbnail_content.id_content', '=', 'content.id')
            ->where('content.category', '=', 'Desain Grafis')
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

        return view('user.category.desain-grafis', compact('getDataContent'));
    }

    public function seni_lukis()
    {
        // get data all in appropriate for category
        $getDataContent = DB::table('content')
            ->join('users', 'users.id', '=', 'content.id_user')
            ->join('thumbnail_content', 'thumbnail_content.id_content', '=', 'content.id')
            ->where('content.category', '=', 'Seni Lukis')
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

        return view('user.category.seni-lukis', compact('getDataContent'));
    }

    public function tulisan_kreatif()
    {
        // get data all in appropriate for category
        $getDataContent = DB::table('content')
            ->join('users', 'users.id', '=', 'content.id_user')
            ->join('thumbnail_content', 'thumbnail_content.id_content', '=', 'content.id')
            ->where('content.category', '=', 'Tulisan Kreatif')
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

        return view('user.category.tulisan-kreatif', compact('getDataContent'));
    }

    public function musik()
    {
        // get data all in appropriate for category
        $getDataContent = DB::table('content')
            ->join('users', 'users.id', '=', 'content.id_user')
            ->join('thumbnail_content', 'thumbnail_content.id_content', '=', 'content.id')
            ->where('content.category', '=', 'Musik dan Audio')
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

        return view('user.category.musik', compact('getDataContent'));
    }

    public function video_film_pendek()
    {
        // get data all in appropriate for category
        $getDataContent = DB::table('content')
            ->join('users', 'users.id', '=', 'content.id_user')
            ->join('thumbnail_content', 'thumbnail_content.id_content', '=', 'content.id')
            ->where('content.category', '=', 'Video dan Film Pendek')
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

        return view('user.category.video-film-pendek', compact('getDataContent'));
    }

    public function kerajinan_tangan()
    {
        // get data all in appropriate for category
        $getDataContent = DB::table('content')
            ->join('users', 'users.id', '=', 'content.id_user')
            ->join('thumbnail_content', 'thumbnail_content.id_content', '=', 'content.id')
            ->where('content.category', '=', 'Kerajinan Tangan')
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

        return view('user.category.kerajinan-tangan', compact('getDataContent'));
    }

    public function kuliner()
    {
        // get data all in appropriate for category
        $getDataContent = DB::table('content')
            ->join('users', 'users.id', '=', 'content.id_user')
            ->join('thumbnail_content', 'thumbnail_content.id_content', '=', 'content.id')
            ->where('content.category', '=', 'Kuliner')
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

        return view('user.category.kuliner', compact('getDataContent'));
    }

    public function mode_dan_busana()
    {
        // get data all in appropriate for category
        $getDataContent = DB::table('content')
            ->join('users', 'users.id', '=', 'content.id_user')
            ->join('thumbnail_content', 'thumbnail_content.id_content', '=', 'content.id')
            ->where('content.category', '=', 'Mode dan Busana')
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

        return view('user.category.mode-dan-busana', compact('getDataContent'));
    }

    public function teknologi_dan_inovasi()
    {
        // get data all in appropriate for category
        $getDataContent = DB::table('content')
            ->join('users', 'users.id', '=', 'content.id_user')
            ->join('thumbnail_content', 'thumbnail_content.id_content', '=', 'content.id')
            ->where('content.category', '=', 'Teknologi dan Inovasi')
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

        return view('user.category.teknologi-dan-inovasi', compact('getDataContent'));
    }
}
