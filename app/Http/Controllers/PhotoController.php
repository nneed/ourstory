<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Photo;

class PhotoController extends Controller
{
    public function Index()
    {
        return view('photo.index', ['photos' => Photo::all()]);
    }
}
