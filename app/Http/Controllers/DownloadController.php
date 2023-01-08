<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\File;
use App\Models\Download;

class DownloadController extends Controller
{
    public function downloadDataset(Request $request, $id)
    {
        $file = File::find($id);
        if ($file->id) {
            $download = new Download();
            $download->file_id = $file->id;
            $download->visitor = $request->ip();
            $download->user_id = Auth::id();
            $download->save();
            $file->downloads += 1;
            $file->save();
            return redirect("/storage/" . $file->filepath);
        } else {
            return abort(404);
        }
    }
}
