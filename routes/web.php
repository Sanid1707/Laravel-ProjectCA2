<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SettingsController;
use App\Http\Controllers\YourPostsController;

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

Route::get('/blog/like/{update}',  [PostsController::class, 'likePost']);

Route::get('/blog/dislike/{update}',  [PostsController::class, 'dislikePost']);

Route::get('/blog/private/{update}',  [PostsController::class, 'privatePost']);

Route::get('/blog/public/{update}',  [PostsController::class, 'publicPost']);

Route::resource('/profile', ProfileController::class);

Route::resource('/settings', SettingsController::class);

Route::resource('/your-posts', YourPostsController::class);

Auth::routes();

Route::get('/home', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');

