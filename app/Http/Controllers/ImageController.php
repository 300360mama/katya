<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ImageController extends Controller
{
    public static function save(Request $request) {
        $path = $request->file('upload')->store('blog');

        return $path;
    }
}
