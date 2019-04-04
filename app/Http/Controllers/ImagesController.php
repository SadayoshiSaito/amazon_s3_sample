<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ImagesController extends Controller
{
    public function create(Request $request)
    {
        $disk = Storage::disk('s3');
        $saveFileName = 'test2.jpg';
        $imageUrl = '';

        if ($request->isMethod('POST')) {
            if ($request->hasFile('image_01')) {
                $img_path = $_FILES['image_01']['tmp_name'];

                $contents = file_get_contents($img_path);

                $disk->put($saveFileName, $contents);
            }
        }

        if($disk->exists($saveFileName)) 
        {
            $imageUrl = $disk->url($saveFileName);
        }

        return view('item.create', [
            'imageUrl' => $imageUrl,
        ]);
    }
}
