<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class users extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // get all data user
        $users = User::orderBy('created_at', 'desc')->paginate(10);
        // erturn view for admin 
        return response()->json($users);
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
                'email' => 'required|email|unique:users',
                'password' => 'required',
            ]);

            $user = User::create([
                'fullname' => $request->fullname,
                'email' => $request->email,
                'password' => Hash::make($request->password),
                'role' => 'user',
                'status' => 'active',
            ]);

            // return to view 
            return response()->json([
                'code' => 201,
                'status' => 'Created'
            ], 201);
        } catch (\Throwable $e) {
            return response()->json([
                'code' => 400,
                'status' => 'Bad request',
                'message' => $e->errors()
            ], 400);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        try {
            $getIdUser = User::find($id);
            return response()->json([
                'code' => 200,
                'status' => 'OK',
                'data' => $getIdUser
            ], 200);
        } catch (\Throwable $th) {
            return response()->json([
                'code' => 400,
                'status' => 'Bad request'
            ], 400);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        try {
            // validate
            $request->validate([
                'fullname' => 'required',
                'email' => 'required|email|unique:users',
                'password' => 'required',
                'role' => 'required',
                'status' => 'required'
            ]);

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
            return response()->json([
                'code' => 200,
                'status' => 'OK',
            ], 200);
        } catch (\Throwable $e) {
            return response()->json([
                'code' => 400,
                'status' => 'Bad request',
                'message' => $e->errors()
            ], 400);
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

            return response()->json([
                'code' => 200,
                'status' => 'OK',
            ], 200);
        } catch (\Throwable $e) {
            return response()->json([
                'code' => 400,
                'status' => 'Bad request',
                'message' => $e->errors()
            ], 400);
        }
    }
}
