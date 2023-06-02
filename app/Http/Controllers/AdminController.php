<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Photo;

class AdminController extends Controller
{
    //Show admmin
    public function showDashboard()
    {
        return view('dashboard', [
            'users'=> User::latest()->paginate(5),
            'photos' => Photo::latest()->paginate(5)
          ]);
    }
    

}