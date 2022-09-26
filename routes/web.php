<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\WalldecalController;
use App\Http\Controllers\AdminController;
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

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('/', [WebController::class, 'index']);


Route::get('/wall-decals', [WebController::class, 'decals'])->name('decals');
Route::get('/vector-walldecals', [WebController::class, 'walldecals'])->name('walldecals');
Route::get('/wall-decals-details', [WebController::class, 'decals_details'])->name('wall-decals-details');
Route::get('/vector-walldecals-details', [WebController::class, 'walldecals_details'])->name('vector-walldecals-details');

Route::get('/baby-cards-details', [WebController::class, 'baby_cards_details'])->name('baby-cards-details');
Route::get('/wallpaper-details', [WebController::class, 'wallpaper_details'])->name('wallpaper-details');
Route::get('/wallpaper', [WebController::class, 'wallpaper'])->name('wallpaper');
Route::get('/baby-cards', [WebController::class, 'babycards'])->name('baby-cards');
Route::get('/prints', [WebController::class, 'prints'])->name('prints');
Route::get('/about-us', [WebController::class, 'about'])->name('about');
Route::get('/shipping', [WebController::class, 'shipping'])->name('shipping');
Route::get('/faq', [WebController::class, 'faq'])->name('faq');
Route::get('/terms-conditions', [WebController::class, 'terms'])->name('terms');
Route::get('/contact', [WebController::class, 'contact'])->name('contact');


Route::group(['prefix' => '/admin','middleware' => 'auth'],function () {
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');

    Route::resource('walldecal', WalldecalController::class);
    Route::get('walldecal-List/', [WalldecalController::class, 'shopList'])->name('walldecal-list');
});