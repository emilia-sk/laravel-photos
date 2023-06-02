<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Comment;

class CommentController extends Controller
{
    //Show all comments
    public function allComments()
    {
        // dd(Comment::latest()->paginate(10)->toArray());

        return view('photo-single', [
            'comments' => Comment::latest()->paginate(10)->toArray()
        ]);
    }

    //Store created comment
    public function store(Request $request)
    {
        $formFields = $request->validate([
            'body' => 'required',
        ]);

        $formFields['user_id'] = auth()->id();

        Comment::create($formFields);

        return back()->with(['message' => 'Качихте коментар!']);
    }
}