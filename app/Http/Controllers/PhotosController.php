<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Photo;

class PhotosController extends Controller
{
    //show all photos
    public function index(){
        return view('index', [
            'photos' => Photo::all()
        ]);
    }

    //show single photo
    public function show(Photo $photo){
        return view('photo-single', [
            'photo' => $photo
        ]);
    }
}
