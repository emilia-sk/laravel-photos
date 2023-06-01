<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PhotosController;
use App\Models\Photo;

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

//Store photo data
Route::post('photo-all', [PhotosController::class, 'store']);

//Show all photos page
Route::get('photo-all', [PhotosController::class, 'allPhotos']);

//Show upload photo page
Route::get('photo-upload',[PhotosController::class, 'upload']);

//Show single photo
Route::get('photo-single/{id}', function($id) {
    return view('photo-single', [
        'photo' => Photo::find($id)
    ]);
}); 
