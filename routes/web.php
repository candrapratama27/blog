<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\TagController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;



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
Auth::routes();

Route::get('/', function () {
    return view('blog');
});

/*Route::get('/isi_post', function(){
	return view('blog.isi_post');
});*/




Route::group(['middleware' => 'auth'], function(){
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('/category', CategoryController::class);
Route::resource('/tag', TagController::class);

Route::get('/post/tampil_hapus', [PostController::class, 'tampil_hapus'])->name('post.tampil_hapus');
Route::get('/post/restore/{id}', [PostController::class, 'restore'])->name('post.restore');
Route::delete('/post/kill/{id}', [PostController::class, 'kill'])->name('post.kill');
Route::resource('/post', PostController::class);
Route::resource('/user', UserController::class);
});




