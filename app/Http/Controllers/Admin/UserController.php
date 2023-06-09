<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // get all data user
        $getDataUser = User::all()->where('role', 'user');
        // return view for admin
        return view('admin.users.users', compact('getDataUser'));
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
    public function store(Request $request)
    {
        try {
            // Check validate users data and store to database
            $request->validate([
                'fullname' => 'required',
                'email' => 'required',
                'password' => 'required',
                'role' => 'required',
                'status' => 'required',
            ]);
            User::create([
                'fullname' => $request->fullname,
                'email' => $request->email,
                'password' => Hash::make($request->password),
                'role' => $request->role,
                'status' => $request->status,
            ]);

            // return to view 
            return redirect()->back()->with(['successStoreData' => 'Berhasil Simpan Data']);
        } catch (\Throwable $error) {
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
            // get id user and delete 
            $getIdUser = User::find($id);

            // update data and store
            $getIdUser->update([
                'fullname' => $request->fullname,
                'email' => $request->email,
                'password' => Hash::make($request->password),
                'role' => $request->role,
                'status' => $request->status,
            ]);

            // return to view 
            return redirect()->back()->with(['successStoreData' => 'Berhasil Simpan Data']);
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
            // get id user and delete 
            $getIdUser = User::find($id);

            // delete and destroy data
            $getIdUser->delete();

            // return to view 
            return redirect()->back()->with(['successStoreData' => 'Berhasil Simpan Data']);
        } catch (\Throwable $error) {
            return $error->getMessage();
        }
    }
}
