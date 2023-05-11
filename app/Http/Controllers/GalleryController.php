<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Support\Facades\Storage;



class GalleryController extends Controller
{
    public function __invoke()
    {
        $directory = 'storage/cars/';
        $images = Storage::files($directory);

        return view('User.gallery')->with('images' , $images);
    }
}
