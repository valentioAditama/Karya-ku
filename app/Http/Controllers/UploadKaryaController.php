<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UploadKaryaController extends Controller
{
    public function index()
    {
        return view('user.upload.upload');
    }
}
