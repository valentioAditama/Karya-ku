<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateArticelStore;
use App\Http\Requests\CreateCommunityStore;
use App\Models\CommentContentCommunity;
use App\Models\Community;
use App\Models\ContentCommunity;
use App\Models\ThumbnailCommunity;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class KomunitasController extends Controller
{
    // review komunitas
    public function review($id)
    {
        // get id and showing community
        $getCommunity = DB::table('community')
            ->join('thumbnail_community', 'thumbnail_community.id_community', '=', 'community.id')
            ->where('community.id', '=', $id)
            ->get([
                'community.id',
                'community.name_community',
                'community.description',
                'thumbnail_community.path'
            ])->first();

        // get content community from users
        $getContentCommunity = Db::table('content_community')
            ->join('users', 'users.id', '=', 'content_community.id_user')
            ->where('id_community', '=', $id)
            ->get([
                'users.fullname',
                'users.image_profile',
                'content_community.description',
                'content_community.created_at',
                'content_community.id',
            ]);

        // review page for community
        return view('user.community.review', compact('getCommunity', 'getContentCommunity'));
    }

    // comment details
    public function reviewComment($id)
    {
        // get banenr and data from community
        $getCommunity = DB::table('content_community')
            ->join('community', 'content_community.id_community', '=', 'community.id')
            ->join('thumbnail_community', 'thumbnail_community.id_community', '=', 'community.id')
            ->join('users', 'users.id', '=', 'content_community.id_user')
            ->where('content_community.id', '=', $id)
            ->get([
                'community.id',
                'community.name_community',
                'community.description',
                'thumbnail_community.path'
            ])->first();

        // get content for comment community
        $getContentCommunity = DB::table('content_community')
            ->join('community', 'content_community.id_community', '=', 'community.id')
            ->join('thumbnail_community', 'thumbnail_community.id_community', '=', 'community.id')
            ->join('users', 'users.id', '=', 'content_community.id_user')
            ->where('content_community.id', '=', $id)
            ->get([
                'community.id',
                'community.name_community',
                'community.description',
                'thumbnail_community.path',
                'users.fullname',
                'users.image_profile',
                'content_community.description',
                'content_community.created_at',
                'content_community.id as id_content'
            ])->first();

        // get Comment people on content
        $getComment = DB::table('comment_content_community')
            ->join('content_community', 'content_community.id', '=', 'comment_content_community.id_content_community')
            ->join('users', 'users.id', '=', 'comment_content_community.id_user')
            ->where('comment_content_community.id_content_community', '=', $id)
            ->get([
                'users.fullname',
                'users.image_profile',
                'comment_content_community.comment',
                'comment_content_community.created_at',
            ]);

        // Review Comment
        return view('user.community.commentsDetail', compact('getCommunity', 'getContentCommunity', 'getComment'));
    }

    public function storeComment(Request $request)
    {
        // check and store data to comment content community
        CommentContentCommunity::create([
            'id_content_community' => $request->id_content,
            'id_user' => Auth::id(),
            'comment' => $request->comment
        ]);

        // return message and redirect back
        return redirect()->back()->with(['successStoreData' => 'Data Berhasil Di Simpan']);
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // get id and showing community
        $getCommunity = DB::table('community')
            ->join('thumbnail_community', 'thumbnail_community.id_community', '=', 'community.id')
            // ->join('content_community', 'content_community.id_community', '=', 'community.id')
            ->get([
                'community.id',
                'community.name_community',
                'community.description',
                'community.created_at',
                'thumbnail_community.path'
            ]);

        // for user
        return view('user.community.community', compact('getCommunity'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // create community page
        return view('user.community.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CreateCommunityStore $request)
    {
        try {
            // validated request
            $validated = $request->validated();

            // Get Id Community and store data community, path thumbnail to table
            $getIdCommunity = Community::create($validated);

            // create path Thumbnail
            $pathThumbnail = $request->file('thumbnail_community')->store('public/community/thumbnail/');
            ThumbnailCommunity::create([
                'id_community' => $getIdCommunity->id,
                'path' => substr($pathThumbnail, 27)
            ]);

            return Redirect::route('komunitas.review', $getIdCommunity)->with(['successStoreCommunity' => 'Berhasil Membuat Komunitas']);
        } catch (\Throwable $error) {
            // Handling Error
            return $error->getMessage();
        }
    }

    public function storeArticel(Request $request, $id)
    {
        try {
            // validated request and store to table database
            ContentCommunity::create([
                'id_user' => Auth::id(),
                'id_community' => $id,
                'description' => $request->description
            ]);

            return redirect()->back()->with(['successStoreData' => 'Data Berhasil Di Simpan']);
        } catch (\Throwable $error) {
            // Handling Error
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
