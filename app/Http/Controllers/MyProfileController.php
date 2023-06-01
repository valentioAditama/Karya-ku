<?php

namespace App\Http\Controllers;

use App\Http\Requests\userRequestStore;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

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
    public function store()
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
