<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{HomeController, PostController, UserController};
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Auth::routes();

Route::middleware(['auth'])->group(function (){
    Route::get('/', [HomeController::class, 'index'])->name('home');
    Route::get('/posts', [PostController::class, 'index'])->name('posts.index');
    Route::get('/posts/{post}', [PostController::class, 'show'])->name('posts.show');

    Route::get('/profile', [UserController::class, 'show'])->name('profile.show')->middleware('auth');
});
