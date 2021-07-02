<?php

use App\Http\Controllers\control_authors;
use App\Http\Controllers\Control_Home;
use App\Http\Controllers\control_news;
use Illuminate\Support\Facades\Route;

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

//home
Route::get('/todo', function () {
    return view('todo-list');
});
Route::get('/home', [Control_Home::class, 'index']);

//Author
Route::get('/admin', [control_authors::class, 'index']);
Route::resource('admin', control_authors::class);
Route::get('/gambar/{image}', [control_authors::class, 'load_image']);
Route::get('/hapus/{id}', [control_authors::class, 'destroy']);
Route::get('/edit/{id}', [control_authors::class, 'edit']);
Route::get('/update/{id}', [control_authors::class, 'update']);

//News
//Route::get('/news', 'App\Http\Controllers\control_news@index');
Route::get('/news', [control_news::class, 'index']);
Route::resource('news', control_news::class);
Route::get('/gambar/news/{image}', [control_news::class, 'load_image']);
Route::get('/hapus/news/{id}', [control_news::class, 'destroy']);

// Route::get('/home', function () {
//     return view('home');
// });
