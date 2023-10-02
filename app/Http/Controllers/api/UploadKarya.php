<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Http\Requests\UploadRequestStore;
use App\Models\Content;
use App\Models\ImageContent;
use App\Models\ThumbnailContent;
use App\Models\VideoContent;
use Illuminate\Http\Request;

class UploadKarya extends Controller
{
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

            return response()->json([
                'code' => 201,
                'status' => 'Created'
            ], 201);
        } catch (\Throwable $error) {
            // handling error
            return response()->json([
                'code' => 400,
                'status' => 'Bad request',
                'message' => $error->errors()
            ], 400);
        }
    }
}
