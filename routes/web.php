<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\EventController;


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


Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::get('/', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login');
Route::get('/signup', [AuthController::class, 'showSignupForm'])->name('signup');
Route::post('/signup', [AuthController::class, 'signup']);
Route::get('/home', function () {return view('home'); })->name('home.dashboard');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
Route::get('/dashboard/admin',[CategoryController::class, 'index'] )->name('dashboard.admin');
Route::post('/update-category', [CategoryController::class, 'updateCategory'])->name('update.category');
Route::post('/delete-category', [CategoryController::class, 'deleteCategory'])->name('delete.category');
Route::post('/categories', [CategoryController::class, 'store'])->name('store.category');
Route::get('/myevents', function () { return view('dashboard.myevents');})->name('myevents');
Route::post('/dashboard.organisateur', [EventController::class, 'store'])->name('store.organisateur');
Route::get('/dashboard/organisateur', [CategoryController::class, 'display'])->name('dashboard.organisateur');
Route::get('/dashboard/organisateur', [EventController::class, 'index'])->name('dashboard.organisateur');

