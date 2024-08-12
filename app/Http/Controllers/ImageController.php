<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ImageController extends Controller
{
    public function show($filename)
    {
        $path = resource_path('img/' . $filename);

        if (file_exists($path)) {
            $file = response()->file($path);
            return $file;
        } else {
            abort(404);
        }
    }

    public function font($font)
    {
        $path = resource_path('css/' . $font);

        if (file_exists($path)) {
            $file = response()->file($path);
            return $file;
        } else {
            abort(404);
        }
    }
}
