<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReviewContentKarya extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // return view for users
        return view('user.review-content.review-content');
    }

    public function adminPage()
    {
        // return view for admin and super-admin
        return view('admin.content-karya.content-karya');
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
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
