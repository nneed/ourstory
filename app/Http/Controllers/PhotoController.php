<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Photo;
use Illuminate\Support\Facades\Storage;

class PhotoController extends Controller
{

    public function Index()
    {
        return view('photo.index', ['photos' => Photo::all()]);
    }

    public function Create(Request $request)
    {
        $path = $request->file('file')->store('avatars');
        $url = Storage::url($path);
        Photo::create(
            [
                'desc'=>$request['desc'],
                'path'=>$url,
            ]);
        return redirect()->route('listPhotos');

    }

    public function FormCreate()
    {
        return view('photo.create');
    }


    public function Edit()
    {

    }

    public function View()
    {

    }

    public function Delete()
    {

    }

    public function Publish()
    {

    }

    public function Unpublish()
    {

    }
}
