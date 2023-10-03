<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Http\Requests\TentangKamiStore;
use App\Models\ContactUs;
use Illuminate\Http\Request;

class TentangKami extends Controller
{
    public function store(TentangKamiStore $request)
    {
        // validation request 
        $validateData = $request->validated();

        // Store Data
        ContactUs::create($validateData);
        return redirect()->back()->with(['successStoreData' => 'Data Berhasil Di Simpan']);
        return response()->json([
            'code' => 201, 
            'status' => 'Created'
        ], 201);
    }
}
