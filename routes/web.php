<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Models\Post;

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
    return view('posts.create');
});
Route::post('/post', [PostController::class, 'store']);
Route::get('/show', [PostController::class, 'show']);
Route::get('/edit-post/{post}', [PostController::class, 'edit']);
Route::put('/edit-post/{post}', [PostController::class, 'update']);
Route::delete('/delete-post/{post}', [PostController::class, 'delete']);
