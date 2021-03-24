<?php

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

/*Route::get('/', function () {
    return view('welcome');
});*/

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Halaman Menu
Route::get('/menu', [App\Http\Controllers\MenuController::class, 'menu'])->name('menu');;

// Halaman Contact
Route::get('/contact', [App\Http\Controllers\ContactController::class, 'contact'])->name('contact');

// Halaman Today-Special
Route::get('/today-special', [App\Http\Controllers\Today_SpecialController::class, 'todaySpecial'])->name('today-special');

// Halaman Index //
/*Cara 1 Dengan Controller*/   
Route::get('/index', [App\Http\Controllers\IndexController::class, 'index'])->name('index');

/*Cara 2 Tanpa Controller*/ 
//Route::get('/index', function() {return view('index'); })->name('index');

