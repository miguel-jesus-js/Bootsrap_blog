<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Usuarios_blog_Controller;

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

Route::get('/create_post', function () {
    return view('create_post');
});
Route::get('/post', function () {
    return view('view_post');
});
Route::get('/view_post', function () {
    return view('desc_post');
});
Route::get('/view_post', function () {
    return view('desc_post');
});
Route::get('/messages', function () {
    return view('message');
});
Route::get('/my_post', function () {
    return view('my_post');
});
Route::resource('usuarios', Usuarios_blog_Controller::class);