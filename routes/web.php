<?php

use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Auth;
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

// Main Controller
Route::get('/home', [MainController::class, 'index'])->name('home');
Route::get('/howtoplay', [MainController::class, 'howtoplay'])->name('rules');
Route::get('/team', [MainController::class, 'team'])->name('team');
Route::get('/contact', [MainController::class, 'contact'])->name('contact');
Route::get('/login', [MainController::class, 'login'])->name('login');
Route::get('/register', [MainController::class, 'register'])->name('register');
Route::get('/tournaments', [MainController::class, 'tournament'])->name('tournament.index');
// Route::get('/tournaments-add', [MainController::class, 'tournament_add'])->name('tournament.create');
// Route::get('/tournaments-edit', [MainController::class, 'tournament_edit'])->name('tournament.edit');

//User Controller

// Auth::routes();

// //Guest Routes List
// Route::middleware(['auth', 'user-access-:client'])->group(function(){
//     Route::get('/tournaments', [MainController::class, 'tournament'])->name('tournament.index');
// })
// //Admin Routes List
// Route::middleware(['auth', 'user-access-:admin'])->group(function(){
//     Route::get('/tournaments', [MainController::class, 'tournament'])->name('tournament.index');
// })
