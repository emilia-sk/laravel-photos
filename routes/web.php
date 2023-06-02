<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PhotosController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CommentController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Show index page
Route::get('/', [PhotosController::class, 'index']);

//Show all photos page
Route::get('photo-all', [PhotosController::class, 'allPhotos']);

//Show upload photo page
Route::get('photo-upload', [PhotosController::class, 'upload'])->middleware('auth');

//Store photo data
Route::post('photo-all', [PhotosController::class, 'store'])->middleware('auth');

//Delete photo
Route::delete('/photos/{photo}', [PhotosController::class, 'destroy'])->middleware('auth');

//Show user register form
Route::get('/register', [UserController::class, 'create'])->middleware('guest');

//Store user data
Route::post('/users', [UserController::class, 'store']);

//Log user out
Route::post('/logout', [UserController::class, 'logout'])->middleware('auth');

//Show login form
Route::get('/login', [UserController::class, 'login'])->middleware('guest')->name('login');

//Log in user
Route::post('/users/authenticate', [UserController::class, 'authenticate']);

//Show single photo
Route::get('/photo-single/{photo}', [PhotosController::class, 'show']);

//Store comment data
Route::post('/comment', [CommentController::class, 'store'])->middleware('auth');

//Show all users page
Route::get('users', [UserController::class, 'showUsersPage']);

//Show contacts page
Route::get('contacts', [PhotosController::class, 'showContactsPage']);