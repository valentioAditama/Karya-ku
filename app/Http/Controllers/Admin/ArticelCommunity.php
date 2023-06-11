<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ContentCommunity;
use Illuminate\Http\Request;

class ArticelCommunity extends Controller
{
    public function index()
    {
        // get data from articel community
        $getDataArticelCommunity = ContentCommunity::join('users', 'users.id', '=', 'content_community.id_user')
            ->join('community', 'community.id', '=', 'content_community.id_community')
            ->orderby('content_community.created_at', 'desc')
            ->select([
                'users.fullname',
                'community.name_community',
                'community.description',
                'content_community.status',
                'content_community.id'
            ])
            ->paginate(10);

        return view('admin.articel-community.articel-community', compact('getDataArticelCommunity'));
    }

    public function change_status(Request $request, $id)
    {
        try {
            // change status update
            $getChangeStatus = ContentCommunity::find($id);
            $getChangeStatus->update([
                'status' => $request->status
            ]);
            // return redirect back
            return redirect()->back()->with(['successStore' => 'Status Berhasil Di Ubah']);
        } catch (\Throwable $error) {
            return $error->getMessage();
        }
    }
}
