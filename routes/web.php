<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\OrganisateurController;



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
Route::get('/dashboard/organisateur', [CategoryController::class, 'display'])->name('dashboard.organisateur');
Route::post('/dashboard.organisateur', [OrganisateurController::class, 'storeEvent'])->name('store.event');
Route::get('/dashboard/organisateur', [OrganisateurController::class, 'displayEvents'])->name('dashboard.organisateur');
Route::get('/{id}/edit', [OrganisateurController::class, 'editEvent'])->name('edit.event');
Route::post('/update', [OrganisateurController::class, 'updateEvent'])->name('update.event');
Route::get('/dashboard/users', [AuthController::class, 'index'])->name('dashboard.users');