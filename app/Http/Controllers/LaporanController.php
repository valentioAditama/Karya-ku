<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LaporanController extends Controller
{
    public function index()
    {
        return view('user.report.report');
    }

    public function adminPage()
    {
        return view('admin.laporan.laporan');
    }
}
