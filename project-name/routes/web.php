<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\BookmarkController;

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

Route::get('/', function () {return view('welcome');})->name('welcome');


Route::get('login', [AuthController::class, 'login'])->name('auth.login');
Route::post('login', [AuthController::class, 'loginPost'])->name('login.post');
Route::get('registration', [AuthController::class, 'registration'])->name('auth.registration');
Route::post('registration', [AuthController::class, 'registrationPost'])->name('registration.post');
Route::get('logout', [AuthController::class, 'logout'])->name('logout');

Route::middleware(['auth'])->group(function () {
    Route::get('forms', [FormController::class, 'index'])->name('form.index');
    Route::get('forms/create', [FormController::class, 'create'])->name('form.create');
    Route::post('forms', [FormController::class, 'store'])->name('form.store');
    Route::get('forms/{form}/edit', [FormController::class, 'edit'])->name('form.edit');
    Route::put('forms/{form}', [FormController::class, 'update'])->name('form.update');
    Route::delete('forms/{form}', [FormController::class, 'destroy'])->name('form.destroy');
    Route::get('detail/{service}', [FormController::class, 'showServiceDetails'])->name('detail');
    Route::get('/search', [SearchController::class, 'search'])->name('search');
    Route::get('/bookmarks', [BookmarkController::class, 'index'])->name('bookmark');
    Route::post('/forms/{form}/bookmark', [BookmarkController::class, 'store'])->name('bookmark.store');
});

Route::get('home', [HomeController::class, 'index'])->name('home');
