<?php

namespace App\Http\Controllers;

use App\Http\Requests\UploadRequestStore;
use App\Models\Content;
use App\Models\ImageContent;
use App\Models\ThumbnailContent;
use App\Models\VideoContent;
use Illuminate\Http\Request;

class UploadKaryaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('user.upload.upload');
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
    public function store(UploadRequestStore $request)
    {
        try {
            // validation request
            $validateData = $request->validated();

            // check konten br new line
            $description = nl2br($request->input('description'));

            // Store Data Content Upload
            $getIdContent = Content::create(array_merge($validateData, ['description' => $description]));

            // // Store path file storage & Thumbnails Data
            // create path Thumbnail
            $pathThumbnail = $request->file('path_thumbnail')->store('public/content/thumbnail');
            ThumbnailContent::create([
                'id_content' => $getIdContent->id,
                'path' => substr($pathThumbnail, 25)
            ]);

            // Store path file storage & Image Data
            // create path Image
            $pathImage = $request->file('path_image')->store('public/content/image');
            ImageContent::create([
                'id_content' => $getIdContent->id,
                'path' => substr($pathImage, 21)
            ]);

            // Store path file storage & Video Data
            // create path Video
            if ($request->hasFile('path_video')) {
                $pathVideo = $request->file('path_video')->store('public/content/video');
                VideoContent::create([
                    'id_content' => $getIdContent->id,
                    'path' => substr($pathVideo, 21)
                ]);
            }

            return redirect()->back()->with(['successStoreData' => 'Data Berhasil Di Simpan']);
            return response()->json("Data Berhasil Di Simpan", 200);
        } catch (\Throwable $error) {
            // handling error
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
