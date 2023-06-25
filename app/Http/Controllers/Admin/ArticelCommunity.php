<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Community;
use App\Models\ContentCommunity;
use App\Models\ImageContentCommunity;
use App\Models\VideoContentCommunity;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ArticelCommunity extends Controller
{
    public function index()
    {
        // get data from articel community
        $getDataArticelCommunity = ContentCommunity::join('users', 'users.id', '=', 'content_community.id_user')
            ->join('community', 'community.id', '=', 'content_community.id_community')
            ->leftJoin('image_content_community', function ($join) {
                $join->on('image_content_community.id_content_community', '=', 'content_community.id')
                    ->orWhereNull('image_content_community.id_content_community');
            })
            ->leftJoin('video_content_communities', function ($join) {
                $join->on('video_content_communities.id_content_community', '=', 'content_community.id')
                    ->orWhereNull('video_content_communities.id_content_community');
            })
            ->orderby('content_community.created_at', 'desc')
            ->select([
                'users.fullname',
                'users.id as id_user',
                'community.name_community',
                'content_community.description as articel_description',
                'content_community.status',
                'content_community.id',
                'image_content_community.path as path_image',
                'video_content_communities.path as path_video',
            ])
            ->paginate(10);

        // get data community
        $dataCommunity = Community::all();

        return view('admin.articel-community.articel-community', compact('getDataArticelCommunity', 'dataCommunity'));
    }

    public function search(Request $request)
    {
        // get data from articel community and search it
        $getDataArticelCommunity = ContentCommunity::join('users', 'users.id', '=', 'content_community.id_user')
            ->join('community', 'community.id', '=', 'content_community.id_community')
            ->leftJoin('image_content_community', function ($join) {
                $join->on('image_content_community.id_content_community', '=', 'content_community.id')
                    ->orWhereNull('image_content_community.id_content_community');
            })
            ->leftJoin('video_content_communities', function ($join) {
                $join->on('video_content_communities.id_content_community', '=', 'content_community.id')
                    ->orWhereNull('video_content_communities.id_content_community');
            })
            ->where('users.fullname', 'like', '%' . $request->search . '%')
            ->orwhere('community.name_community', 'like', '%' . $request->search . '%')
            ->orwhere('content_community.description', 'like', '%' . $request->search . '%')
            ->orwhere('content_community.status', 'like', '%' . $request->search . '%')
            ->orderby('content_community.created_at', 'desc')
            ->select([
                'users.fullname',
                'users.id as id_user',
                'community.name_community',
                'content_community.description as articel_description',
                'content_community.status',
                'content_community.id',
                'image_content_community.path as path_image',
                'video_content_communities.path as path_video',
            ])
            ->paginate(10);

        // get data community
        $dataCommunity = Community::all();

        return view('admin.articel-community.articel-community', compact('getDataArticelCommunity', 'dataCommunity'));
    }

    public function change_status(Request $request, $id)
    {
        try {
            // change status update
            $getChangeStatus = ContentCommunity::find($id);
            $getChangeStatus->update([
                'status' => $request->status
            ]);
            // return redirect back
            return redirect()->back()->with(['successStoreData' => 'Status Berhasil Di Ubah']);
        } catch (\Throwable $error) {
            return $error->getMessage();
        }
    }

    public function store(Request $request)
    {
        try {
            // validate data 
            $request->validate([
                'description' => 'required',
                'image' => 'mimes:jpeg,jpg,png',
                'video' => 'mimes:mp4,mkv,webm,flv'
            ]);

            // store data to content community 
            $dataContent = ContentCommunity::create([
                'id_user' => Auth::id(),
                'id_community' => $request->community,
                'description' => $request->description
            ]);

            // check handling null image and video
            if ($request->file('image') == null) {
            } else {
                $image = $request->file('image')->store('public/community/content/image/');
                ImageContentCommunity::create([
                    'id_content_community' => $dataContent->id,
                    'path' => substr($image, 32)
                ]);
            }

            if ($request->file('video') == null) {
            } else {
                if ($request->hasFile('video')) {
                    $pathVideo = $request->file('video')->store('public/community/content/video/');
                    VideoContentCommunity::create([
                        'id_content_community' => $dataContent->id,
                        'path' => substr($pathVideo, 32)
                    ]);
                }
            }

            // return redirect back
            return redirect()->back()->with(['successStoreData' => 'Data Berhasil Di Tambahkan']);
        } catch (\Throwable $error) {
            return $error->getMessage();
        }
    }

    public function update(Request $request, $id)
    {
        try {
            // validate data 
            $request->validate([
                'description' => 'required',
                'image' => 'mimes:jpeg,jpg,png',
                'video' => 'mimes:mp4,mkv,webm,flv'
            ]);

            // find data id 
            $data = ContentCommunity::find($id);

            // get and store data
            $data->update([
                'id_user' => $request->users,
                'id_community' => $request->community,
                'description' => $request->description
            ]);

            // check handling null image and video
            if ($request->file('image') == null) {
            } else {
                $image = $request->file('image')->store('public/community/content/image/');
                ImageContentCommunity::create([
                    'id_content_community' => $data->id,
                    'path' => substr($image, 32)
                ]);
            }

            if ($request->file('video') == null) {
            } else {
                if ($request->hasFile('video')) {
                    $pathVideo = $request->file('video')->store('public/community/content/video/');
                    VideoContentCommunity::create([
                        'id_content_community' => $data->id,
                        'path' => substr($pathVideo, 32)
                    ]);
                }
            }

            // return redirect back
            return redirect()->back()->with(['successStoreData' => 'Data Berhasil Di Update']);
        } catch (\Throwable $error) {
            return $error->getMessage();
        }
    }

    public function destroy($id)
    {
        try {
            // get data id and delete data 
            $data = ContentCommunity::find($id);
            $data->delete();

            // return redirect back
            return redirect()->back()->with(['successStoreData' => 'Data Berhasil Di Hapus']);
        } catch (\Throwable $error) {
            return $error->getMessage();
        }
    }
}
