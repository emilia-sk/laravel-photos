<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    //Show register form
    public function create()
    {
        return view('users.register');
    }

    //Create New User
    public function store(Request $request)
    {
        $formFields = $request->validate([
            'name' => ['required', 'min:4'],
            'email' => ['required', 'email', Rule::unique('users', 'email')],
            'password' => 'required|confirmed|between:4,255|'
        ]);

        //Password Hash
        $formFields['password'] = bcrypt($formFields['password']);

        //Create the user
        $user = User::create($formFields);

        //Login
        auth()->login($user);

        return redirect('/')->with(['message' => 'Регистрацията беше успешна!']);
    }

    //Logout user
    public function logout(Request $request)
    {
        auth()->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/')->with(['message' => 'Излязохте от профила си!']);
    }

    //Show Login Form
    public function login()
    {
        return view('users.login');
    }

     //Auth User
     public function authenticate(Request $request) {
        $formFields = $request->validate([
            'email' => ['required', 'email'],
            'password' => 'required'
        ]);

        if (auth()->attempt($formFields)) {
            $request->session()->regenerate();

            return redirect('/')->with(['message' => 'Влязохте в профила си!']);
        }
    }
}