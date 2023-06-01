<?php

namespace App\Http\Controllers;

use App\Http\Requests\UploadRequestStore;
use App\Models\Content;
use App\Models\ImageContent;
use App\Models\ThumbnailContent;
use App\Models\VideoContent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;

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

            // Store Data Content Upload
            $getIdContent = Content::create($validateData);

            // // Store path file storage & Thumbnails Data
            // create path image
            $pathThumbnail = $request->file('path_thumbnail')->store('public/content/thumbnail');
            ThumbnailContent::create([
                'id_content' => $getIdContent->id,
                'path' => $pathThumbnail
            ]);

            // Store path file storage & Image Data
            // create path Image
            $pathImage = $request->file('path_image')->store('public/content/image');
            ImageContent::create([
                'id_content' => $getIdContent->id,
                'path' => $pathImage
            ]);

            // Store path file storage & Video Data
            // create path Video
            $pathVideo = $request->file('path_video')->store('public/content/video');
            VideoContent::create([
                'id_content' => $getIdContent->id,
                'path' => $pathVideo
            ]);

            return redirect()->back()->with(['successStoreData' => 'Data Berhasil Di Simpan']);
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
