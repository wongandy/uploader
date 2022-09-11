<?php

namespace App\Http\Controllers;

use App\Models\TemporaryUpload;
use Illuminate\Http\Request;

class UploadAvatarController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        if ($request->hasFile('avatar')) {
            $file = $request->file('avatar');
            $folder = uniqid() . '-' . now()->timestamp;
            $fileName = $file->getClientOriginalName();
            $file->storeAs('avatar/tmp/' . $folder, $fileName, 'public');

            TemporaryUpload::create([
                'folder' => $folder,
                'file' => $fileName
            ]);

            return $folder;
        }
    }
}
