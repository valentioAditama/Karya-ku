<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ContentCommunity;
use Illuminate\Http\Request;

class ArticelCommunity extends Controller
{
    public function index()
    {
        // get data from articel community
        $getDataArticelCommunity = ContentCommunity::join('users', 'users.id', '=', 'content_community.id_user')
            ->join('community', 'community.id', '=', 'content_community.id_community')
            ->orderby('content_community.created_at', 'desc')
            ->paginate(10);

        return view('admin.articel-community.articel-community', compact('getDataArticelCommunity'));
    }
}
