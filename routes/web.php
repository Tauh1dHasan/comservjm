<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\frontend\PagesController;

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

Route::group(['prefix' => '/', 'as' => 'frontend.'], function() {
    Route::get('/', [PagesController::class, 'home'])->name('home');
    Route::get('aboutus', [PagesController::class, 'about'])->name('about');
    Route::get('services', [PagesController::class, 'services'])->name('services');
    Route::get('service-item', [PagesController::class, 'serviceItem'])->name('serviceItem');
    Route::get('gallery', [PagesController::class, 'gallery'])->name('gallery');
    Route::get('shop', [PagesController::class, 'shop'])->name('shop');
    Route::get('shopItem', [PagesController::class, 'shopItem'])->name('shopItem');
    Route::get('faq', [PagesController::class, 'faq'])->name('faq');
    Route::get('contact', [PagesController::class, 'contact'])->name('contact');
});

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
