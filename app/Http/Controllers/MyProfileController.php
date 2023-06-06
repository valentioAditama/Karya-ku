<?php

namespace App\Http\Controllers;

use App\Http\Requests\SkillsStore;
use App\Http\Requests\SocialMediaStore;
use App\Http\Requests\userRequestStore;
use App\Models\Skills;
use App\Models\SocialMedia;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class MyProfileController extends Controller
{
    public function index()
    {
        // get data social media
        // facebook
        $getSocialFacebook = DB::table('social_media')
            ->where('id_user', '=', Auth::id())
            ->where('brand_social_media', '=', 'Facebook')
            ->first();

        // Instagram
        $getSocialInstagram = DB::table('social_media')
            ->where('id_user', '=', Auth::id())
            ->where('brand_social_media', '=', 'Instagram')
            ->first();

        // Twitter
        $getSocialTwitter = DB::table('social_media')
            ->where('id_user', '=', Auth::id())
            ->where('brand_social_media', '=', 'Twitter')
            ->first();

        // Youtube
        $getSocialYoutube = DB::table('social_media')
            ->where('id_user', '=', Auth::id())
            ->where('brand_social_media', '=', 'Youtube')
            ->first();

        // Get Data From Skils
        $getDataSkills = DB::table('skills')
            ->where('id_user', '=', Auth::id())
            ->get();

        return view('user.my-profile.my-profle', compact('getSocialFacebook', 'getSocialInstagram', 'getSocialTwitter', 'getSocialYoutube', 'getDataSkills'));
    }

    public function login_change_password()
    {
        return view('user.my-profile.login-change-password');
    }

    public function reset_password()
    {
        return view('user.my-profile.reset-password');
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

        return redirect()->back()->with(['successStoreData' => 'Data Berhasil Di Simpan']);
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

        return redirect()->back()->with(['successStoreData' => 'Data Berhasil Di Simpan']);
    }

    public function deleteSkills(SkillsStore $request)
    {
        // check id and destroy
        Skills::where('id_user', Auth::id())
            ->where('name_skills', $request->name_skills)
            ->first()
            ->delete();

        return redirect()->back()->with(['successStoreData' => 'Data Berhasil Di Simpan']);
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

        return redirect()->back()->with(['successStoreData' => 'Data Berhasil Di Simpan']);
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

            return redirect()->back()->with(['successStoreData' => 'Data Berhasil Di Simpan']);
        } catch (\Throwable $error) {
            // handling error
            return $error->getMessage();
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
