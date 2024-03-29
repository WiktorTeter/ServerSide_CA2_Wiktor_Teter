<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\PostsController;

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

Route::get('/', [PagesController::class, 'index']);

Route::resource('/blog', PostsController::class);

Auth::routes();

Route::get('/home', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/whatwedo', function () {
    return view('whatwedo');
});
Route::get('/address', function () {
    return view('address');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/phone', function () {
    return view('phone');
});

Route::get('/whatwedo', [PostsController::class, 'whatWeDo']);