<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KomunitasController extends Controller
{
    // review komunitas
    public function review()
    {
        // revuew page for community
        return view('user.community.review');
    }

    // comment details 
    public function reviewComment()
    {
        // comments detail for community
        return view('user.community.commentsDetail');
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // for user
        return view('user.community.community');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // create community page 
        return view('user.community.create');
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
