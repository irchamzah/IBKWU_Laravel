<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class ImageController extends Controller
{
    public function index($folder, $file)
    {
        $path = $folder . '/' . $file;
        return Storage::disk('public_path')->get($path);
    }
}
