<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Http\Requests\SkillsStore;
use App\Http\Requests\SocialMediaStore;
use App\Http\Requests\userRequestStore;
use App\Models\Skills;
use App\Models\SocialMedia;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class MyProfile extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($id)
    {
        // get data social media
        // facebook
        $getSocialFacebook = DB::table('social_media')
            ->where('id_user', '=', $id)
            ->where('brand_social_media', '=', 'Facebook')
            ->first();

        // Instagram
        $getSocialInstagram = DB::table('social_media')
            ->where('id_user', '=', $id)
            ->where('brand_social_media', '=', 'Instagram')
            ->first();

        // Twitter
        $getSocialTwitter = DB::table('social_media')
            ->where('id_user', '=', $id)
            ->where('brand_social_media', '=', 'Twitter')
            ->first();

        // Youtube
        $getSocialYoutube = DB::table('social_media')
            ->where('id_user', '=', $id)
            ->where('brand_social_media', '=', 'Youtube')
            ->first();

        // Get Data From Skils
        $getDataSkills = DB::table('skills')
            ->where('id_user', '=', $id)
            ->get();

        return response()->json([
            'code' => 200,
            'status' => 'OK',
            'data' => compact('getSocialFacebook', 'getSocialInstagram', 'getSocialTwitter', 'getSocialYoutube', 'getDataSkills')
            // 'data' => $getDataSkills
        ], 200);
    }

    public function login_change_password_check(Request $request, $id)
    {
        // check password
        $checkPassword = User::find($id);

        if (Hash::check($request->password, $checkPassword->password)) {
            return response()->json([
                'code' => 200,
                'status' => "OK",
                'messsage' => "Check Password Successfully"
            ], 200);
        } else {
            return response()->json([
                'code' => 401,
                'status' => 'Unauthorized',
                'message' => 'Password Wrong'
            ], 401);
        }
    }

    public function change_password(Request $request, $id)
    {
        // check user password old
        $checkUserPassword = User::find($id);
        if (Hash::check($request->old_password, $checkUserPassword->password)) {
            // check password confirm
            if ($request->password == $request->confirm_password) {
                $checkUserPassword->update([
                    'password' => Hash::make($request->confirm_password)
                ]);
                return response()->json([
                    'code' => 200, 
                    'status' => 'OK', 
                    'message' => 'Data Has Save Successfully'
                ], 200);
            } else {
                return response()->json([
                    'code' => 401, 
                    'status' => 'unauthorized', 
                    'message' => 'Password Do Not Matched'
                ], 401);
            }
        } else {
            return response()->json([
                'code' => 401, 
                'status' => 'unauthorized', 
                'message' => 'Wrong Password'
            ], 401);
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    public function storeSkills(SkillsStore $request)
    {
        // Validate the request data
        $validated = $request->validated();
        Skills::create($validated);

        return response()->json([
            'code' => 200, 
            'status' => 'OK', 
            'message' => 'Data Has Successfully Save'
        ], 200);
    }

    public function updateSkills(SkillsStore $request)
    {
        // Validate the request data
        $validated = $request->validated();

        // check old and then change old data
        $updateSkills = Skills::where('id_user', Auth::id())
            ->where('name_skills', $request->old_skills)
            ->first();

        // update skills
        $updateSkills->update($validated);

        return response()->json([
            'code' => 200, 
            'status' => 'OK', 
            'message' => 'Data Has Successfully Update'
        ], 200);    }

    public function deleteSkills(SkillsStore $request)
    {
        // check id and destroy
        Skills::where('id_user', Auth::id())
            ->where('name_skills', $request->name_skills)
            ->first()
            ->delete();

        return response()->json([
            'code' => 200, 
            'status' => 'OK', 
            'message' => 'Data Has Successfully Deleted'
        ], 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function storeSocialMedia(SocialMediaStore $request)
    {
        // Validate the request data
        $validatedData = $request->validated();

        // Get the authenticated user's ID
        $userId = auth()->id();

        // Loop through the validated data and create/update the social media entries
        foreach ($validatedData as $brand => $name) {
            // Find the existing social media entry for the current user and brand
            $socialMedia = SocialMedia::where('id_user', $userId)
                ->where('brand_social_media', $brand)
                ->first();

            if ($socialMedia) {
                // If an existing entry exists, update the name
                $socialMedia->name = $name !== null ? $name : ''; // Set to empty string if $name is null
                $socialMedia->save();
            } else {
                // If no existing entry exists, create a new one
                SocialMedia::create([
                    'id_user' => $userId,
                    'brand_social_media' => $brand,
                    'name' => $name !== null ? $name : '', // Set to empty string if $name is null
                ]);
            }
        }

        return response()->json([
            'code' => 200, 
            'status' => 'OK', 
            'message' => 'Data Has Successfully Save'
        ], 200);
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
    public function update(userRequestStore $request, string $id)
    {
        try {
            // validate request
            $validateRequest = $request->validated();

            // Change Image Profile And then save to folder and store
            // create path Thumbnail
            if ($request->file('image_profile') == null) {
            } else {
                $pathImageProfile = $request->file('image_profile')->store('public/user/profile');
                $imageProfileName = basename($pathImageProfile);

                DB::table('users')->where('id', '=', $id)->update([
                    'image_profile' => $imageProfileName
                ]);
            }

            // create path Image
            if ($request->file('image_banner') == null) {
            } else {
                $pathBannerProfile = $request->file('image_banner')->store('public/user/banner');
                $imageBannerName = basename($pathBannerProfile);

                DB::table('users')->where('id', '=', $id)->update([
                    'image_banner' => $imageBannerName
                ]);
            }


            // get data id user and then update store the data
            $getUserData = User::where('id', $id)->first();
            $getUserData->update($validateRequest);

            return response()->json([
                'code' => 200, 
                'status' => 'OK', 
                'message' => 'Data Has Successfully Save'
            ], 200);
        } catch (\Throwable $error) {
            // handling error
            return response()->json([
                'code' => 400, 
                'status' => 'BAD REQUEST', 
                'message' => $error->errors()
            ], 400);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
