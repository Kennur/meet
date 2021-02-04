<?php

use Illuminate\Support\Facades\Route;


use App\Http\Controllers\EventController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\JoinEventController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Auth\RegisterController;



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

Route::get('/',function(){
    return view('home');
})->name('home');





Route::post('/logout', [LogoutController::class, 'logout'])->name('logout');

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'store']);

Route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::post('/register', [RegisterController::class, 'store']);


Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard')->middleware('auth');

Route::get('/event', [EventController::class, 'index'])->name('event');
Route::post('/event', [EventController::class, 'store']);
Route::get('/event/search', [EventController::class, 'search'])->name('event.search');

// join to event
Route::post('/event/joins/{event}', [JoinEventController::class, 'join'])->name('event.join');


//Route::post('/posts/{post}/likes', [PostLikeController::class, 'store'])->name('posts.likes');



