<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Laporan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LaporanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Get All Data Report
        $getDataReport = DB::table('laporan')
            ->join('users', 'users.id', '=', 'laporan.id_user')
            ->orderBy('created_at', 'desc')
            ->get([
                'users.fullname',
                'laporan.id',
                'laporan.comment',
                'laporan.created_at'
            ]);
        return view('admin.laporan.laporan', compact('getDataReport'));
    }

    public function search(Request $request)
    {
        // get data all and search it 
        // Get All Data Report
        $getDataReport = DB::table('laporan')
            ->join('users', 'users.id', '=', 'laporan.id_user')
            ->where('users.fullname', 'like', '%' . $request->search . '%')
            ->orwhere('laporan.comment', 'like', '%' . $request->search . '%')
            ->orderBy('created_at', 'desc')
            ->get([
                'users.fullname',
                'laporan.id',
                'laporan.comment',
                'laporan.created_at'
            ]);
        return view('admin.laporan.laporan', compact('getDataReport'));
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
        try {
            // get data 
            $getDataLaporan = Laporan::find($id);
            $getDataLaporan->delete();

            return redirect()->back()->with(['successStore' => 'Data Berhasil Di Hapus']);
        } catch (\Throwable $error) {
            return $error->getMessage();
        }
    }
}
