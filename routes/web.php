<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\frontend\PagesController;
use App\Http\Controllers\backend\HomePageController;
use App\Http\Controllers\backend\AboutusPageController;
use App\Http\Controllers\backend\GalleryController;
use App\Http\Controllers\backend\FaqController;
use App\Http\Controllers\backend\SettingController;
use App\Http\Controllers\backend\ShopController;
use App\Http\Controllers\backend\ProductController;
use App\Http\Controllers\backend\ServiceController;

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
    Route::get('shopCategory/{id}', [PagesController::class, 'shopCategory'])->name('shopCategory');
    Route::get('shopItem/{id}', [PagesController::class, 'shopItem'])->name('shopItem');
    Route::get('faq', [PagesController::class, 'faq'])->name('faq');
    Route::get('contact', [PagesController::class, 'contact'])->name('contact');

});

Auth::routes([
    'register' => false, // Register Routes...
]);


Route::group(['middleware' => ['auth'], 'prefix' => '/admin', 'as' => 'admin.'], function() {

    Route::get('/', [HomePageController::class, 'index'])->name('dashboard');

    Route::group(['prefix' => '/home', 'as' => 'home.'], function() {

        Route::get('/', [HomePageController::class, 'homePage'])->name('homePage');

        Route::post('/main_slider_update', [HomePageController::class, 'mainSliderUpdate'])->name('mainSliderUpdate');
        Route::post('/aboutus_update', [HomePageController::class, 'aboutusUpdate'])->name('aboutusUpdate');
        Route::post('/highlightUpdate', [HomePageController::class, 'highlightUpdate'])->name('highlightUpdate');
        Route::post('/offerUpdate', [HomePageController::class, 'offerUpdate'])->name('offerUpdate');
        Route::post('/statisticUpdate', [HomePageController::class, 'statisticUpdate'])->name('statisticUpdate');
        Route::post('/addTestimonial', [HomePageController::class, 'addTestimonial'])->name('addTestimonial');
        Route::get('/deleteTestimonial/{id}', [HomePageController::class, 'deleteTestimonial'])->name('deleteTestimonial');

    });

    Route::group(['prefix' => '/aboutus', 'as' => 'aboutus.'], function() {

        Route::get('/', [AboutusPageController::class, 'index'])->name('index');

        Route::post('/experienceUpdate', [AboutusPageController::class, 'experienceUpdate'])->name('experienceUpdate');
        Route::post('/certificateUpdate', [AboutusPageController::class, 'certificateUpdate'])->name('certificateUpdate');
        Route::post('/addTeam', [AboutusPageController::class, 'addTeam'])->name('addTeam');
        Route::get('/delete-team/{id}', [AboutusPageController::class, 'deleteTeam'])->name('deleteTeam');
    });

    Route::group(['prefix' => '/gallery', 'as' => 'gallery.'], function() {
        
        Route::get('/', [GalleryController::class, 'index'])->name('index');

        Route::post('/update', [GalleryController::class, 'update'])->name('update');
        Route::post('/delete', [GalleryController::class, 'delete'])->name('delete');
    });

    Route::group(['prefix' => '/faq', 'as' => 'faq.'], function() {

        Route::get('/', [FaqController::class, 'index'])->name('index');

        Route::post('/add', [FaqController::class, 'add'])->name('add');
        Route::get('/delete/{id}', [FaqController::class, 'delete'])->name('delete');

    });

    Route::group(['prefix' => '/setting', 'as' => 'setting.'], function() {

        Route::get('/', [SettingController::class, 'index'])->name('index');

        Route::post('/update', [SettingController::class, 'update'])->name('update');
    });

    Route::group(['prefix' => '/shop', 'as' => 'shop.'], function() {

        Route::get('/categories', [ShopController::class, 'categories'])->name('categories');
        Route::post('/addCategory', [ShopController::class, 'addCategory'])->name('addCategory');
        Route::get('/deleteCategory/{id}', [ShopController::class, 'deleteCategory'])->name('deleteCategory');

        Route::get('/products', [ProductController::class, 'products'])->name('products');
        Route::post('/addProduct', [ProductController::class, 'addProduct'])->name('addProduct');
        Route::get('/deleteProduct/{id}', [ProductController::class, 'deleteProduct'])->name('deleteProduct');
    });

    Route::group(['prefix' => '/service', 'as' => 'service.'], function() {
        Route::get('/', [ServiceController::class, 'index'])->name('index');
        
        Route::post('/addService', [ServiceController::class, 'addService'])->name('addService');
        Route::get('/deleteService/{id}', [ServiceController::class, 'deleteService'])->name('deleteService');

        Route::get('/categories', [ServiceController::class, 'categories'])->name('categories');
        Route::post('/addCategory', [ServiceController::class, 'addCategory'])->name('addCategory');
        Route::post('/deleteCategory/{id}', [ServiceController::class, 'deleteCategory'])->name('deleteCategory');
    });

});
