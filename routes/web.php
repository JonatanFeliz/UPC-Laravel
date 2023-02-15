<?php

use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TournamentController;

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


// Main Controller
Route::get('/home', [MainController::class, 'index'])->name('home');
Route::get('/howtoplay', [MainController::class, 'howtoplay'])->name('rules');
Route::get('/team', [MainController::class, 'team'])->name('team');
Route::get('/contact', [MainController::class, 'contact'])->name('contact');
Route::get('/login', [MainController::class, 'login'])->name('login');
Route::get('/register', [MainController::class, 'register'])->name('register');
Route::get('/score', [MainController::class, 'score'])->name('score');

//Tournament Controller
Route::get('/tournament/index', [TournamentController::class, 'index'])->name('index');
Route::get('/tournament/create', [TournamentController::class, 'create'])->name('create');

Route::resource('tournament', TournamentController::class);

// User Controller
Route::post('/login-entry', [UserController::class, 'validateLogin'])->name('login.entry');
Route::post('/register-add', [UserController::class, 'register'])->name('register.add');

Route::get('/message', function () {
    return view('userMessage');
});

// Score Controller