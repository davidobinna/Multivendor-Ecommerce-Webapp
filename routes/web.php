<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\BannerController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
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
Route::get('/',function(){
    return view('welcome');
});

Auth::routes(['verify' => true, 'register'=> false]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


  //Admin
Route::group(['prefix'=>'admin/','middleware'=>'auth'],function(){
      Route::get('/',[AdminController::class,'admin'])->name('admin');
      // Banner Section
      Route::resource('banner','BannerController');
      Route::post('banner_status',[BannerController::class,'bannerStatus'])->name('banner.status');

      // Category Section
      Route::resource('category','CategoryController');
      Route::post('category_status',[CategoryController::class,'categoryStatus'])->name('category.status');

      // Brand Section
      Route::resource('brand','BrandController');
      Route::post('brand_status',[BrandController::class,'brandStatus'])->name('brand.status');

      // Products Section
      Route::resource('product','ProductController');
      Route::post('product_status',[ProductController::class,'productStatus'])->name('product.status');

});
