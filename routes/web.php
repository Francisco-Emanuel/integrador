<?php

use App\Http\Controllers\CardController;
use App\Http\Controllers\userController;
use Illuminate\Support\Facades\Route;

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

// PAGES
Route::get('/', function () {
    return view('home');
})->name('home');
Route::get('/create', function () {
    return view('create');
})->name('create');
Route::get('/about', function () {
    return view('about');
})->name('about');

// AUTH
Route::post('/register', [userController::class, 'register']);
Route::post('/logout', [userController::class, 'logout']);
Route::post('/login', [userController::class, 'login']);
Route::get('/auth/google', [userController::class,'redirectToGoogle']);
Route::get('/auth/google/callback', [userController::class,'handleGoogleCallback']);


// CARD CONTROL
Route::post('/delete-card', [CardController::class,'deleteCards']);
Route::post('/deleteCard', [CardController::class,'deleteCard']);
Route::post('/create-card', [CardController::class,'createCards']);
Route::get('/', [CardController::class, 'showCards']);