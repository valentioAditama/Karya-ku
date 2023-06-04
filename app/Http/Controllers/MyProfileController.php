<?php

namespace App\Http\Controllers;

use App\Http\Requests\userRequestStore;
use App\Models\SocialMedia;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;


class MyProfileController extends Controller
{
    public function index()
    {
        return view('user.my-profile.my-profle');
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

    /**
     * Store a newly created resource in storage.
     */
    public function storeSocialMedia(Request $request)
    {
        try {
            if ($request->facebook || $request->instagram || $request->twitter || $request->youtube) {
            }
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
