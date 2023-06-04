<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateCommunityStore;
use App\Models\Community;
use App\Models\ThumbnailCommunity;
use Illuminate\Http\Request;
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
            // ->join('content_community', 'content_community.id_community', '=', 'community.id')
            ->where('community.id', '=', $id)
            ->get([
                'community.name_community',
                'community.description',
                'thumbnail_community.path'
            ])->first();

        // review page for community
        return view('user.community.review', compact('getCommunity'));
    }

    // comment details 
    public function reviewComment()
    {
        // comments detail for community
        return view('user.community.commentsDetail');
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
