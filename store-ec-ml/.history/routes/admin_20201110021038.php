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
    Route::group(['prefix'=>'brands'],function(){
         Route::get('/','BrandController@Index')->name('main.brands');
         Route::get('/create-brand','BrandController@Create')->name('create.categories');
         Route::post('/store-brand','BrandController@Store')->name('store.category');
         Route::get('/edit-brand/{id}','BrandController@Edit')->name('edit.category');
         Route::post('/update-brand/{id}','BrandController@Update')->name('update.category');
         Route::get('/delete-brand/{id}/d','BrandController@Delete')->name('delete.category');

    });
});
Route::group(["prefix"=>"admin",
              "namespace" => "Dashboard",
              "middleware" => "guest:admin"], function () {
    Route::get('login', 'LoginController@ViewLogin')->name('admin.login');
    Route::post('login', 'LoginController@Login')->name('login');

 
});
});