<?php

namespace App\Http\Controllers\Admin\Ckeditor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;

class CkeditorController extends Controller
{
    public function upload(Request $request)
    {
        $image = $request->file('upload');
        if ($request->hasFile('upload') && $image->isValid()) {
            $dir = 'images/upload/' . date('Y/M/d/');
            $absolutePath = public_path($dir);
            if (!File::isDirectory($absolutePath)) {
                File::makeDirectory($absolutePath, recursive: true);
            }
            $name = Str::uuid()->toString();
            $extension = 'jpg';
            $path = $absolutePath . $name . '.' . $extension;
            $imageManager = Image::make($image);
            $imageManager->resize(360, 370);
            $imageManager->save($path, 56, 'jpg');
            return response([
                "uploaded" => true,
                "url" => asset($dir . $name . '.' . $extension)
            ]);
        }
    }
}
