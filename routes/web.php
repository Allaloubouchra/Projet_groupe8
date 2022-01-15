<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\RatingController;
use App\Http\Controllers\ParticipantsController;

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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/layout', function () {
    return view('layout');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/Home', function () {
    return view('home2');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/destination', function () {
    return view('destination');
});

Route::post('/register', function () {
    return view('register');
});
Route::get('/facts', function () {
    return view('facts');
});
Route::get('/profil', function () {
    return view('profil');
});


Route::get('/blogs',[PostController::class,'index']);

Route::get('/post', [PostController::class,'create']);

Route::post('/post', [PostController::class,'store']);

Route::get('/post/{id}', [PostController::class, 'show']);

Route::post('/post/{id}/comment', [RatingController::class, 'store']);

Route::get('addparticipants',[ParticipantsController::class,'addparticipantsview']);

Route::post('addparticipants',[ParticipantsController::class,'addparticipants']);






/*Route::get('/createpost', [ 
          'uses' =>'PostController@postCreatPost',
          'as'=>'post.create']);});*/










Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
