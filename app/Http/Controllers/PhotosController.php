<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Photo;


class PhotosController extends Controller
{

    //Show Index(main) Page
    public function index()
    {
        return view('index');
    }

    //Show all photos
    public function allPhotos()
    {
        return view('photo-all', [
            'photos' => Photo::latest()->paginate(10)
        ]);
    }

    //Show upload photo page
    public function upload()
    {
        return view('photo-upload');
    }

    //Store photo data 
    public function store(Request $request)
    {
        $formFields = $request->validate([
            'title' => 'required',
            'description' => 'required',
            'photo' => 'required',
        ]);

        if ($request->hasFile('photo')) {
            $formFields['photo'] = $request->file('photo')->store('photos', 'public');
        }

        Photo::create($formFields);

        return redirect('photo-all');
    }

       //Show single photo
       public function show(Photo $photo)
       {
           return view('photo-single', [
               'photo' => $photo
           ]);
       }
}