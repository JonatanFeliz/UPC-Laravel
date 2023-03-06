<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\TournamentController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;

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

Route::get('/', function () {
    return view('welcome');
});

// Main Controller
Route::get('/home', [MainController::class, 'index'])->name('home');
Route::get('/howtoplay', [MainController::class, 'howtoplay'])->name('rules');
Route::get('/team', [MainController::class, 'team'])->name('team');
Route::get('/contact', [MainController::class, 'contact'])->name('contact');


// Tournament Controller
Route::get('/tournaments', [TournamentController::class, 'index'])->name('tournaments.index');
Route::post('/tournaments', [TournamentController::class, 'store'])->name('tournaments.store')->middleware('auth');
Route::get('/tournaments/create', [TournamentController::class, 'create'])->name('tournaments.create')->middleware('auth');
Route::get('/tournaments/{tournament}', [TournamentController::class, 'show'])->name('tournaments.show');
Route::put('/tournaments/{tournament}', [TournamentController::class, 'update'])->name('tournaments.update')->middleware('auth');
Route::delete('/tournaments/{tournament}', [TournamentController::class, 'destroy'])->name('tournaments.destroy')->middleware('auth');
Route::get('/tournaments/{tournament}/edit', [TournamentController::class, 'edit'])->name('tournaments.edit')->middleware('auth');


// User Controller
Route::get('/login', [AuthenticatedSessionController::class, 'index'])->name('login.index')->middleware('guest');
Route::get('/register',[RegisteredUserController::class, 'index'])->name('register.index')->middleware('guest');

Route::post('/register',[RegisteredUserController::class, 'store'])->name('register.store');
Route::post('/login',[AuthenticatedSessionController::class, 'store'])->name('login');
Route::post('/logout',[AuthenticatedSessionController::class, 'destroy'])->name('logout');