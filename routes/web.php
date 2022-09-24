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


Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/', [App\Http\Controllers\WebController::class, 'index'])->name('home');
Route::get('/wall-decals', [App\Http\Controllers\WebController::class, 'decals'])->name('decals');
Route::get('/vector-walldecals', [App\Http\Controllers\WebController::class, 'walldecals'])->name('walldecals');
Route::get('/wall-decals-details', [App\Http\Controllers\WebController::class, 'decals_details'])->name('wall-decals-details');
Route::get('/vector-walldecals-details', [App\Http\Controllers\WebController::class, 'walldecals_details'])->name('vector-walldecals-details');

Route::get('/baby-cards-details', [App\Http\Controllers\WebController::class, 'baby_cards_details'])->name('baby-cards-details');
Route::get('/wallpaper-details', [App\Http\Controllers\WebController::class, 'wallpaper_details'])->name('wallpaper-details');
Route::get('/wallpaper', [App\Http\Controllers\WebController::class, 'wallpaper'])->name('wallpaper');
Route::get('/baby-cards', [App\Http\Controllers\WebController::class, 'babycards'])->name('baby-cards');
Route::get('/prints', [App\Http\Controllers\WebController::class, 'prints'])->name('prints');
Route::get('/about-us', [App\Http\Controllers\WebController::class, 'about'])->name('about');
Route::get('/shipping', [App\Http\Controllers\WebController::class, 'shipping'])->name('shipping');
Route::get('/faq', [App\Http\Controllers\WebController::class, 'faq'])->name('faq');
Route::get('/terms-conditions', [App\Http\Controllers\WebController::class, 'terms'])->name('terms');
Route::get('/contact', [App\Http\Controllers\WebController::class, 'contact'])->name('contact');
