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
    Route::get('about', [PagesController::class, 'about'])->name('about');
});

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
