<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\UploadRequestStore;
use App\Models\Content;
use App\Models\ImageContent;
use App\Models\ThumbnailContent;
use App\Models\VideoContent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KontenKaryaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Get Data ALl From Content
        $getDataContent = DB::table('content')
            ->join('users', 'users.id', '=', 'content.id_user')
            ->join('thumbnail_content', 'thumbnail_content.id_content', '=', 'content.id')
            ->join('image_content', 'image_content.id_content', '=', 'content.id')
            ->leftJoin('video_content', function ($join) {
                $join->on('video_content.id_content', '=', 'content.id')
                    ->orWhereNull('video_content.id_content');
            })
            ->get([
                'users.fullname',
                'content.id',
                'content.title',
                'content.sub_title',
                'content.description',
                'content.category',
                'thumbnail_content.path as path_thumbnail',
                'image_content.path as path_image',
                'video_content.path as path_video',
                'content.status',
                'content.created_at'
            ]);

        // return view content karya
        return view('admin.content-karya.index', compact('getDataContent'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    public function change_status(Request $request, $id)
    {
        try {
            // change status update
            $getChangeStatus = Content::find($id);
            $getChangeStatus->update([
                'status' => $request->status
            ]);

            // return redirect back
            return redirect()->back()->with(['successStore' => 'Status Berhasil Di Ubah']);
        } catch (\Throwable $error) {
            return $error->getMessage();
        }
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
        try {
            // validation request
            $validateData = $request->validated([
                'title' => 'required',
                'sub_title' => 'required',
                'category' => 'required',
                'description' => 'required',
                'path_thumbnail' => 'required|mimes:jpeg,jpg,png|max:8000',
                'path_image' => 'required|mimes:jpeg,jpg,png|max:8000',
                'path_video' => 'mimes:mp4|max:100000',
            ]);

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
            // validation request
            $getData = Content::find($id);
            // and destroy
            $getData->delete();

            // return back view with messages
            return redirect()->back()->with(['successStoreData' => 'Data Berhasil Di Simpan']);
        } catch (\Throwable $error) {
            return $error->getMessage();
        }
    }
}
