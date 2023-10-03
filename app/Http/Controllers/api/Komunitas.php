<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Http\Requests\CreateCommunityStore;
use App\Models\CommentContentCommunity;
use App\Models\Community;
use App\Models\ContentCommunity;
use App\Models\ImageContentCommunity;
use App\Models\LikeContentCommunity;
use App\Models\Members;
use App\Models\ThumbnailCommunity;
use App\Models\VideoContentCommunity;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class Komunitas extends Controller
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

        // get Members for community
        $getMembersCommunity = DB::table('members')
            ->join('community', 'members.id_community', '=', 'community.id')
            ->join('users', 'users.id', '=', 'members.id_user')
            ->where('community.id', '=', $id)
            ->count();

        // get content community from users and get count of comments
        $getContentCommunity = ContentCommunity::join('users', 'users.id', '=', 'content_community.id_user')
            ->leftJoin('image_content_community', function ($join) {
                $join->on('image_content_community.id_content_community', '=', 'content_community.id')
                    ->orWhereNull('image_content_community.id_content_community');
            })
            ->leftJoin('video_content_communities', function ($join) {
                $join->on('video_content_communities.id_content_community', '=', 'content_community.id')
                    ->orWhereNull('video_content_communities.id_content_community');
            })
            ->leftJoin('comment_content_community', 'comment_content_community.id_content_community', '=', 'content_community.id')
            ->leftJoin('like_content_community', 'like_content_community.id_content_community', '=', 'content_community.id')
            ->where('id_community', '=', $id)
            ->where('content_community.status', '=', 'active')
            ->orderBy('content_community.created_at', 'DESC')
            ->select(
                'users.fullname',
                'users.image_profile',
                'content_community.description',
                'content_community.created_at',
                'content_community.id',
                'image_content_community.path as image_content',
                'video_content_communities.path as video_content',
                DB::raw('COUNT(DISTINCT content_community.id) as content_count'),
                DB::raw('COUNT(DISTINCT comment_content_community.id) as comment_count'),
                DB::raw('COUNT(DISTINCT like_content_community.id) as like_count')
            )
            ->groupBy(
                'users.fullname',
                'users.image_profile',
                'content_community.description',
                'content_community.created_at',
                'content_community.id',
                'content_community.status',
                'image_content_community.path',
                'video_content_communities.path',
            )
            ->get();

        // review page for community
        return response()->json([
            'code' => 200, 
            'status' => 'OK', 
            'data' => compact('getCommunity'. 'getContentCommunity', 'getMembersCommunity')
        ], 200);
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

        // get Members for community
        $getMembersCommunity = DB::table('members')
            ->join('community', 'members.id_community', '=', 'community.id')
            ->join('users', 'users.id', '=', 'members.id_user')
            ->where('community.id', '=', $getCommunity->id)
            ->count();


        // get content for comment community
        $getContentCommunity = DB::table('content_community')
            ->join('community', 'content_community.id_community', '=', 'community.id')
            ->join('thumbnail_community', 'thumbnail_community.id_community', '=', 'community.id')
            ->join('users', 'users.id', '=', 'content_community.id_user')
            ->where('content_community.id', '=', $id)
            ->orderBy('created_at', 'DESC')
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
            ->where('comment_content_community.status', '=', 'active')
            ->orderBy('created_at', 'ASC')
            ->get([
                'users.fullname',
                'users.image_profile',
                'comment_content_community.comment',
                'comment_content_community.status',
                'comment_content_community.created_at',
            ]);

        // get Count the comment
        $getCountComment = DB::table('comment_content_community')
            ->join('content_community', 'content_community.id', '=', 'comment_content_community.id_content_community')
            ->join('users', 'users.id', '=', 'comment_content_community.id_user')
            ->where('comment_content_community.id_content_community', '=', $id)
            ->orderBy('created_at', 'ASC')
            ->count();

        // get Count the Likes
        $getCountLikes = DB::table('like_content_community')
            ->join('content_community', 'content_community.id', '=', 'like_content_community.id_content_community')
            ->join('users', 'users.id', '=', 'like_content_community.id_user')
            ->where('like_content_community.id_content_community', '=', $id)
            ->orderBy('created_at', 'ASC')
            ->count();


        // Review Comment
        return response()->json([
            'code' => 200, 
            'status' => 'OK',
            'data' => compact('getCommunity', 'getContentCommunity', 'getComment', 'getCountComment', 'getCountLikes', 'getMembersCommunity')
        ], 200);
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
        return response()->json([
            'code' => 201, 
            'status' => 'Created',
        ], 201);
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // get id and showing community
        $getCommunity = DB::table('community')
            ->join('users', 'users.id', '=', 'community.id_user')
            ->join('thumbnail_community', 'thumbnail_community.id_community', '=', 'community.id')
            ->where('community.status', '=', 'active')
            ->orderBy('created_at', 'DESC')
            ->get([
                'community.id',
                'community.name_community',
                'community.description',
                'community.created_at',
                'thumbnail_community.path',
                'users.fullname',
                'users.image_profile as image_profile'
            ]);

        // for user
        return response()->json([
            'code' => 200, 
            'status' => 'OK',
            'data' => $getCommunity
        ], 200);
    }

    public function search(Request $request)
    {
        // get data search for community
        $GetSearchCommunity = DB::table('community')
            ->join('users', 'users.id', '=', 'community.id_user')
            ->join('thumbnail_community', 'thumbnail_community.id_community', '=', 'community.id')
            ->where('name_community', 'like', '%' . $request->search . '%')
            ->orderBy('created_at', 'DESC')
            ->get([
                'community.id',
                'community.name_community',
                'community.description',
                'community.created_at',
                'thumbnail_community.path',
                'users.fullname',
                'users.image_profile'
            ]);

        return response()->json([
            'code' => 200, 
            'status' => 'OK',
            'data' => $GetSearchCommunity
        ], 200);
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

            return response()->json([
                'code' => 201, 
                'status' => 'Created',
                'message' => 'Successfully create a community'
            ], 201);
    
        } catch (\Throwable $error) {
            // Handling Error
            return response()->json([
                'code' => 400, 
                'status' => 'Bad Request',
                'message' => $error->errors()
            ], 400);
    
        }
    }

    public function storeArticel(Request $request, $id)
    {
        try {
            // validated request and store to table database
            $getIdContent = ContentCommunity::create([
                'id_user' => Auth::id(),
                'id_community' => $id,
                'description' => $request->description
            ]);

            // Store path file storage & Image Data
            // create path Image
            if ($request->file('path_image') == null) {
            } else {
                $pathImage = $request->file('path_image')->store('public/community/content/image/');
                ImageContentCommunity::create([
                    'id_content_community' => $getIdContent->id,
                    'path' => substr($pathImage, 32)
                ]);
            }

            // Store path file storage & Video Data
            // create path Video
            if ($request->file('path_video') == null) {
            } else {
                if ($request->hasFile('path_video')) {
                    $pathVideo = $request->file('path_video')->store('public/community/content/video/');
                    VideoContentCommunity::create([
                        'id_content_community' => $getIdContent->id,
                        'path' => substr($pathVideo, 32)
                    ]);
                }
            }

            return response()->json([
                'code' => 201, 
                'status' => 'Created',
                'message' => 'Successfully post articel'
            ], 201);    
        } catch (\Throwable $error) {
            // Handling Error
            return response()->json([
                'code' => 400, 
                'status' => 'Bad Request',
                'message' => $error->errors()
            ], 400);    
        }
    }

    public function storeArticelMember(Request $request, $id)
    {
        try {
            // check user has add to member community
            $checkMemberUser = Members::where('id_community', '=', $id)
                ->where('id_user', '=', Auth::id())
                ->first();

            if ($checkMemberUser) {
                $checkMemberUser->delete();

                // return redirect using message
                return redirect()->back()->with(['errorMembersDuplicate' => 'Berhasil UnMembers Pada Community Ini']);
            } else {
                // store data for members on community
                Members::create([
                    'id_community' => $id,
                    'id_user' => Auth::id()
                ]);

                // return redirect using message
                return response()->json([
                    'code' => 201, 
                    'status' => 'Created',
                    'message' => 'Successfully join this community'
                ], 201);        
            }
        } catch (\Throwable $error) {
            return response()->json([
                'code' => 400, 
                'status' => 'Bad Request',
                'message' => $error->errors()
            ], 400);    
        }
    }

    public function storeArticelLikes(Request $request, $id)
    {
        try {
            // check user has like before?
            $checkLikesUser = LikeContentCommunity::where('id_content_community', '=', $id)
                ->where('id_user', '=', Auth::id())
                ->first();
            if ($checkLikesUser) {
                $checkLikesUser->delete();

                return redirect()->back()->with(['errorLikeDuplicate' => 'Berhasil Unlike Pada Artikel Ini']);
            } else {
                // get all request and validate and store to likes with who user
                LikeContentCommunity::create([
                    'id_content_community' => $id,
                    'id_user' => Auth::id()
                ]);

                return response()->json([
                    'code' => 201, 
                    'status' => 'Created',
                    'message' => 'Successfully Like this articel'
                ], 201);
            }
        } catch (\Throwable $error) {
            return response()->json([
                'code' => 400, 
                'status' => 'Bad Request',
                'message' => $error->errors()
            ], 400);
        }
    }
}
