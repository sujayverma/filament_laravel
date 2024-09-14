<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Video;

class VideoController extends Controller
{
    //
     // Download method
     public function download($id)
     {
         $video = Video::findOrFail($id);
 
         // Get the storage path to the file
         $path = public_path( $video->download_url);
        //  $path = storage_path('app/public/' . $video->download_url);
 
         // Return the file as a response, prompting the user to download it
         return response()->download($path);
     }
}
