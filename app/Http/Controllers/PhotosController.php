<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Photo;
use App\Models\Comment;


class PhotosController extends Controller
{

    //Show Index(main) Page
    public function index()
    {
        return view('index', [
            'photos' => Photo::all()->take(10)
        ]);
    }

    //Show all photos
    public function allPhotos()
    {
        return view('photo-all', [
            'photos' => Photo::latest()->paginate(10)
        ]);
    }

    //Show single photo
    public function show(Photo $photo)
    {
        // dd(Comment::latest()->paginate(10)->toArray());
        return view('photo-single', [
            'photo' => $photo,
            'comments' => Comment::latest()->paginate(10)->toArray()
        ]);
    }

    //Show upload photo page
    public function upload()
    {
        return view('photo-upload');
    }

    //Store photo data 
    public function store(Request $request){

        $formFields = $request->validate([
            'title' => 'required',
            'description' => 'required',
            'photo' => 'required',
        ]);

        if ($request->hasFile('photo')) {
            $formFields['photo'] = $request->file('photo')->store('photos', 'public');
        }

        $formFields['user_id'] = auth()->id();

        Photo::create($formFields);

        return redirect('photo-all')->with(['message' => 'Снимката е качена!']);
    }

    //Delete photo
    public function destroy(Photo $photo)
    {

        // Make sure the logged in user is owner
        if ($photo->user_id != auth()->id()) {
            abort(403, 'Unauthorized Action');
        }

        $photo->delete();
        return redirect('photo-all')->with(['message' => 'Снимката е изтрита!']);
    }

}