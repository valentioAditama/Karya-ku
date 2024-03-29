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
        $getDataUser = User::orderBy('created_at', 'desc')->paginate(15);
        // return view for admin
        return view('admin.users.users', compact('getDataUser'));
    }

    public function search(Request $request)
    {
        // get data users and search
        $getDataUser = User::where('fullname', 'like', '%' . $request->search . '%')
            ->orwhere('email', 'like', '%' . $request->search . '%')
            ->orwhere('role', 'like', '%' . $request->search . '%')
            ->orwhere('status', 'like', '%' . $request->search . '%')
            ->orwhere('role_job', 'like', '%' . $request->search . '%')
            ->orwhere('location', 'like', '%' . $request->search . '%')
            ->orderBy('created_at', 'desc')->paginate(15);

        // get value return to search bar
        $search = $request->search;
        // return view for admin
        return view('admin.users.users', compact('getDataUser', 'search'));
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
            $getChangeStatus = User::find($id);
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
            return redirect()->back()->with(['successStoreData' => 'Berhasil Tambah Data']);
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
            return redirect()->back()->with(['successStoreData' => 'Berhasil Edit Data']);
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
            return redirect()->back()->with(['successStoreData' => 'Berhasil Hapus Data']);
        } catch (\Throwable $error) {
            return $error->getMessage();
        }
    }
}
