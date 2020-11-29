<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "admin" middleware group. Now create something great!
|
*/
Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
    ], function(){
    
Route::group([ "prefix"=>"admin",
               "namespace" => "Dashboard",
                "middleware" => "auth:admin"], function () {
    Route::get('/', 'DashboardController@Index')->name('admin.index');
    Route::group(['prefix'=>'setting'],function(){
        Route::get('method_shipping/{type}','SettingController@ViewMethodShipping')->name('method.shipping.type');
        Route::PUT('method_shipping/{id}','SettingController@EditMethodShipping')->name('method.shipping.update');
        Route::get('logout','LoginController@logout')->name('logout');

    });
    Route::group(['prefix'=>'profile'],function(){
        Route::get('viewProfile','ProfileController@ViewProfile')->name('view.profile');
        Route::get('EditProfile','ProfileController@EditProfile')->name('edit.profile');
        Route::PUT('UpdateProfileAdmin','ProfileController@UpdateProfile')->name('update.profile');
        Route::get('ResetPassword','ProfileController@ResetPass')->name('reset.password');
        Route::PUT('UpdatePassword','ProfileController@UpdatePass')->name('update.password');

    });
    Route::group(['prefix'=>'main-category'],function(){
         Route::get('/{type}','MainCategoryController@Index')->name('main.categories');
         Route::get('/{typeCreate}/create','MainCategoryController@Create')->name('create.categories');
         Route::post('/{typeStore}/store','MainCategoryController@Store')->name('store.category');
         Route::get('/{typeEdit}/{id}/edit','MainCategoryController@Edit')->name('edit.category');
         Route::post('/{typeUpdate}/{id}/update','MainCategoryController@Update')->name('update.category');
         Route::get('/{typeDelete}/{id}/delete','MainCategoryController@Delete')->name('delete.category');

    });
    Route::group(['prefix'=>'category'],function(){
        Route::get('/','CategoryController@Index')->name('main.cat');
        Route::get('/create-cat','CategoryController@Create')->name('create.cat');
        Route::post('/store-cat','CategoryController@Store')->name('store.cat');
        Route::get('/edit-cat/{id}','CategoryController@Edit')->name('edit.cat');
        Route::post('/update-cat/{id}','CategoryController@Update')->name('update.cat');
        Route::get('/delete-cat/{id}','CategoryController@Delete')->name('delete.cat');

   });
    Route::group(['prefix'=>'brands'],function(){
         Route::get('/','BrandController@Index')->name('main.brands');
         Route::get('/create-brand','BrandController@Create')->name('create.brands');
         Route::post('/store-brand','BrandController@Store')->name('store.brands');
         Route::get('/edit-brand/{id}','BrandController@Edit')->name('edit.brands');
         Route::post('/update-brand/{id}','BrandController@Update')->name('update.brands');
         Route::get('/delete-brand/{id}','BrandController@Delete')->name('delete.brands');

    });
    Route::group(['prefix'=>'tags'],function(){
         Route::get('/','TagsController@Index')->name('main.tags');
         Route::get('/create-tags','TagsController@Create')->name('create.tags');
         Route::get('/store-tags','TagsController@Store')->name('store.tags');
         Route::get('/edit-tags/{id}','TagsController@Edit')->name('edit.tags');
         Route::post('/update-tags/{id}','TagsController@Update')->name('update.tags');
         Route::get('/delete-tags/{id}','TagsController@Delete')->name('delete.tags');

    });
    Route::group(['prefix'=>'products'],function(){
         Route::get('/','ProductController@Index')->name('main.tags');
         Route::get('/create-product','ProductController@Create')->name('create.tags');
         Route::get('/store-tags','ProductController@Store')->name('store.tags');
         Route::get('/edit-tags/{id}','ProductController@Edit')->name('edit.tags');
         Route::post('/update-tags/{id}','ProductController@Update')->name('update.tags');
         Route::get('/delete-tags/{id}','ProductController@Delete')->name('delete.tags');

    });
});
Route::group(["prefix"=>"admin",
              "namespace" => "Dashboard",
              "middleware" => "guest:admin"], function () {
    Route::get('login', 'LoginController@ViewLogin')->name('admin.login');
    Route::post('login', 'LoginController@Login')->name('login');

 
});
});