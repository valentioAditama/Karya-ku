<?php

namespace App\Http\Controllers;

use App\Http\Requests\UploadRequestStore;
use App\Models\Content;
use App\Models\ImageContent;
use App\Models\ThumbnailContent;
use App\Models\VideoContent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class MyListKaryaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Get Data From Skils
        $getDataSkills = DB::table('skills')
            ->where('id_user', '=', Auth::id())
            ->get();

        // Get Data Karya from id loggedin
        $getDataContent = DB::table('content')
            ->join('users', 'users.id', '=', 'content.id_user')
            ->join('thumbnail_content', 'thumbnail_content.id_content', '=', 'content.id')
            ->where('content.id_user', '=', Auth::id())
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

        return view('user.my-profile.my-karya', compact('getDataSkills', 'getDataContent'));
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
        // Get Data Karya from id loggedin
        $getDataContent = DB::table('content')
            ->join('users', 'users.id', '=', 'content.id_user')
            ->join('thumbnail_content', 'thumbnail_content.id_content', '=', 'content.id')
            ->where('content.id', '=', $id)
            ->get([
                'content.id',
                'users.fullname',
                'content.title',
                'content.sub_title',
                'content.description',
                'thumbnail_content.path',
                'content.status',
                'content.created_at'
            ])->first();

        return view('user.upload.update', compact('getDataContent'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UploadRequestStore $request, string $id)
    {
        try {
            // validation request
            $validateData = $request->validated();

            // get id content
            $getIdContent = Content::find($id);

            // Store Data Content Upload
            $getIdContent->update($validateData);

            // // Store path file storage & Thumbnails Data
            // create path Thumbnail
            $pathThumbnail = $request->file('path_thumbnail')->store('public/content/thumbnail');
            $updateThumbnailContent = ThumbnailContent::where('id_content', '=', $getIdContent->id)->first();
            $updateThumbnailContent->update([
                'path' => substr($pathThumbnail, 25)
            ]);

            // Store path file storage & Image Data
            // create path Image
            $pathImage = $request->file('path_image')->store('public/content/image');
            $updateImageContent = ImageContent::where('id_content', '=', $getIdContent->id)->first();
            $updateImageContent->update([
                'path' => substr($pathImage, 21)
            ]);

            // Store path file storage & Video Data
            // create path Video
            if ($request->hasFile('path_video')) {
                $pathVideo = $request->file('path_video')->store('public/content/video');
                $updateVideoContent = VideoContent::where('id_content', '=', $getIdContent->id)->first();
                $updateVideoContent->update([
                    'path' => substr($pathVideo, 21)
                ]);
            }

            return redirect()->back()->with(['successStoreData' => 'Data Berhasil Di Simpan']);
            return response()->json("Data Berhasil Di Simpan", 200);
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
            // before delete check other child relation
            $getDataThumbnail = ThumbnailContent::where('id_content', '=', $id)->first();
            $getDataThumbnail->delete();

            // delete image child
            $getDataImage = ImageContent::where('id_content', '=', $id)->first();
            $getDataImage->delete();

            // delete video child
            $getDataVideo = VideoContent::where('id_content', '=', $id)->first();
            $getDataVideo->delete();

            // check and delete data from content parents
            $getDataContent = Content::find($id);
            $getDataContent->delete();

            return redirect()->back()->with(['successDeleteContent' => 'Data Berhasil Di Hapus']);
            return response()->json("Data Berhasil Di Hapus", 200);
        } catch (\Throwable $error) {
            return $error->getMessage();
        }
    }
}
