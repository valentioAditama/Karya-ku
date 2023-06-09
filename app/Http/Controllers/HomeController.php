<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index()
    {
        // Get data Content Karya
        // Get Data ALl From Content
        $getDataContent = DB::table('content')
            ->join('users', 'users.id', '=', 'content.id_user')
            ->join('thumbnail_content', 'thumbnail_content.id_content', '=', 'content.id')
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

        // return to view
        return view('user.home.home', compact('getDataContent'));
    }

    public function search(Request $request)
    {
        // get data search for home content
        $getDataContent = DB::table('content')
            ->join('users', 'users.id', '=', 'content.id_user')
            ->join('thumbnail_content', 'thumbnail_content.id_content', '=', 'content.id')
            ->where('title', 'like', '%' . $request->search . '%')
            ->orderBy('created_at', 'DESC')
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

        // return value search
        $search = $request->search;
        // return to view
        return view('user.home.search', compact('getDataContent', 'search'));
    }
}
