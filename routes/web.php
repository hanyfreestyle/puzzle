<?php

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::view('profile', 'profile.edit')->name('profile.edit')->middleware(['auth']);

Route::view('home', 'home')
	->name('home')
	->middleware(['auth']);

Route::view('profile', 'profile.edit')
	->name('profile.edit')
	->middleware(['auth']);
