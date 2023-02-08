<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
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
    return redirect('/posts');
});

Route::get('/login', [UserController::class, 'loginPage']);
Route::post('/login', [UserController::class, 'postLogin']);
Route::get('/logout', [UserController::class, 'logout']);

Route::get('/register', [UserController::class, 'registerPage']);
Route::post('/register', [UserController::class, 'registerPost']);

Route::get('/contact', [PostController::class, 'contactPage']);

Route::get('/create', [PostController::class, 'create']);
Route::post('/create', [PostController::class, 'store']);
Route::get('/posts', [PostController::class, 'index']);
Route::get('/posts/{post}', [PostController::class, 'show'])->name('postShow');
Route::get('/posts/{post}/edit', [PostController::class, 'edit']);
Route::put('/posts/{post}/update', [PostController::class, 'update']);
Route::delete('/posts/{post}/remove', [PostController::class, 'destroy']);
