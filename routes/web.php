<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\WalldecalController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\VectorController;
use App\Http\Controllers\WallpaperController;
use App\Http\Controllers\FontController;
use App\Http\Controllers\PrintController;
use App\Http\Controllers\BabycardController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\GiftcardController;
/*
/*
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

Route::get('/home', [WebController::class, 'index'])->name('home');
Route::group(['middleware' => 'auth'],function () {
Route::get('/dashboard', [WebController::class, 'dashboard'])->name('dashboard');

});

Route::get('/viewdd', [WebController::class, 'viewdd'])->name('viewdd');
Route::get('/', [WebController::class, 'index'])->name('home');
Route::get('/wall-decals', [WebController::class, 'decals'])->name('decals');
Route::get('/vector-walldecals', [WebController::class, 'walldecals'])->name('walldecals');

Route::get('/wall-decals-details/{id}', [WebController::class, 'decals_details'])->name('wall-decals-details');

Route::get('/vector-walldecals-details/{id}', [WebController::class, 'walldecals_details'])->name('vector-walldecals-details');

Route::get('/baby-cards-details/{id}', [WebController::class, 'baby_cards_details'])->name('baby-cards-details');
Route::get('/wallpaper-details/{id}', [WebController::class, 'wallpaper_details'])->name('wallpaper-details');
Route::get('/wallpaper', [WebController::class, 'wallpaper'])->name('wallpaper');
Route::get('/baby-cards', [WebController::class, 'babycards'])->name('baby-cards');
Route::get('/prints', [WebController::class, 'prints'])->name('prints');

Route::get('fetch-font-price/', [PrintController::class, 'getfontPrice'])->name('fetch-font-price');
Route::get('fetch-order/', [OrderController::class, 'getOrderbyid'])->name('fetch-order');
Route::get('/about-us', [WebController::class, 'about'])->name('about');
Route::get('/shipping', [WebController::class, 'shipping'])->name('shipping');
Route::get('/faq', [WebController::class, 'faq'])->name('faq');
Route::get('/terms-conditions', [WebController::class, 'terms'])->name('terms');
Route::get('/contact', [WebController::class, 'contact'])->name('contact');

Route::resource('cart', CartController::class);
Route::get('/getcart', [CartController::class, 'getcart'])->name('getcart');
Route::get('/deletecart', [CartController::class, 'deletecart'])->name('deletecart');

Route::get('/deletecart/{id}', [CartController::class, 'delete_cart']);
Route::get('state-list/', [WebController::class, 'stateList'])->name('state-list');

Route::get('/checkout', [CheckoutController::class, 'index'])->name('checkout');


Route::get('/applygiftcard', [CheckoutController::class, 'applygiftcard'])->name('applygiftcard');
Route::group(['prefix' => '/admin','middleware' => 'auth'],function () {
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
    
    Route::resource('walldecal', WalldecalController::class);
    Route::get('walldecal-List/', [WalldecalController::class, 'walldecalList'])->name('walldecal-list');
    
    Route::resource('vector', VectorController::class);
    Route::get('vector-List/', [VectorController::class, 'vectorList'])->name('vector-list');

    Route::resource('wallpaper', WallpaperController::class);
    Route::get('wallpaper-List/', [WallpaperController::class, 'wallpaperList'])->name('wallpaper-list');

    Route::resource('font', FontController::class);
    Route::get('font-List/', [FontController::class, 'fontList'])->name('font-list');


    Route::resource('print', PrintController::class);
    Route::get('print-List/', [PrintController::class, 'printList'])->name('print-list');

    Route::resource('babycard', BabycardController::class);
    Route::get('babycard-List/', [BabycardController::class, 'babycardList'])->name('babycard-list');

    Route::post('/orderplace', [OrderController::class, 'orderplace'])->name('orderplace');
    Route::get('order/', [OrderController::class, 'order'])->name('order');
    Route::get('order-List/', [OrderController::class, 'orderList'])->name('order-list');
    Route::get('order-show/{id}', [OrderController::class, 'show'])->name('order-show');
   
    Route::resource('user', UserController::class);
   
    Route::get('user-List/', [UserController::class, 'userList'])->name('user-list');
    

    Route::resource('giftcard', GiftcardController::class);
    Route::get('giftcard-List/', [GiftcardController::class, 'giftcardList'])->name('giftcard-list');

});