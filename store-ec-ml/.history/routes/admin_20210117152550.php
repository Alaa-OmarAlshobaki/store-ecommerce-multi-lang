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
        'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath']
    ],
    function () {

        Route::group([
            "prefix" => "admin",
            "namespace" => "Dashboard",
            "middleware" => "auth:admin"
        ], function () {
            Route::get('/', 'DashboardController@Index')->name('admin.index');
            Route::group(['prefix' => 'setting'], function () {
                Route::get('method_shipping/{type}', 'SettingController@ViewMethodShipping')->name('method.shipping.type');
                Route::PUT('method_shipping/{id}', 'SettingController@EditMethodShipping')->name('method.shipping.update');
                Route::get('logout', 'LoginController@logout')->name('logoutAdmin');
            });
            Route::group(['prefix'=>'roles'],function(){
                Route::get('/','RolesController@Index')->name('view-roles');
                Route::get('/add-permission','RolesController@AddPermission')->name('add-permission');
                Route::post('/store-permission','RolesController@StorePermission')->name('store-permission');
                Route::get('/update-permission/{id}','RolesController@UpdatePermission')->name('update-roles');
                Route::post('/update-roles/{id}','RolesController@UpdateRoles')->name('update.roles');
                Route::get('/delete-permission/{id}','RolesController@DeletePermission')->name('delete-roles');


            });
            Route::group(['prefix'=>'Control-Panel-User'],function(){
                Route::get('/','ControlPanelUserController@Index')->name('view-control-user');
                Route::get('add-controlToUser','ControlPanelUserController@Create')->name('add-control-user');
                Route::post('')

            });
            Route::group(['prefix' => 'profile'], function () {
                Route::get('viewProfile', 'ProfileController@ViewProfile')->name('view.profile');
                Route::get('EditProfile', 'ProfileController@EditProfile')->name('edit.profile');
                Route::PUT('UpdateProfileAdmin', 'ProfileController@UpdateProfile')->name('update.profile');
                Route::get('ResetPassword', 'ProfileController@ResetPass')->name('reset.password');
                Route::PUT('UpdatePassword', 'ProfileController@UpdatePass')->name('update.password');
            });
            Route::group(['prefix' => 'main-category'], function () {
                Route::get('/{type}', 'MainCategoryController@Index')->name('main.categories');
                Route::get('/{typeCreate}/create', 'MainCategoryController@Create')->name('create.categories');
                Route::post('/{typeStore}/store', 'MainCategoryController@Store')->name('store.category');
                Route::get('/{typeEdit}/{id}/edit', 'MainCategoryController@Edit')->name('edit.category');
                Route::post('/{typeUpdate}/{id}/update', 'MainCategoryController@Update')->name('update.category');
                Route::get('/{typeDelete}/{id}/delete', 'MainCategoryController@Delete')->name('delete.category');
            });
            Route::group(['prefix' => 'category'], function () {
                Route::get('/', 'CategoryController@Index')->name('main.cat');
                Route::get('/create-cat', 'CategoryController@Create')->name('create.cat');
                Route::post('/store-cat', 'CategoryController@Store')->name('store.cat');
                Route::get('/edit-cat/{id}', 'CategoryController@Edit')->name('edit.cat');
                Route::post('/update-cat/{id}', 'CategoryController@Update')->name('update.cat');
                Route::get('/delete-cat/{id}', 'CategoryController@Delete')->name('delete.cat');
            });
            Route::group(['prefix' => 'brands'], function () {
                Route::get('/', 'BrandController@Index')->name('main.brands');
                Route::get('/create-brand', 'BrandController@Create')->name('create.brands');
                Route::post('/store-brand', 'BrandController@Store')->name('store.brands');
                Route::get('/edit-brand/{id}', 'BrandController@Edit')->name('edit.brands');
                Route::post('/update-brand/{id}', 'BrandController@Update')->name('update.brands');
                Route::get('/delete-brand/{id}', 'BrandController@Delete')->name('delete.brands');
            });
            Route::group(['prefix' => 'tags'], function () {
                Route::get('/', 'TagsController@Index')->name('main.tags');
                Route::get('/create-tags', 'TagsController@Create')->name('create.tags');
                Route::post('/store-tags', 'TagsController@Store')->name('store.tags');
                Route::get('/edit-tags/{id}', 'TagsController@Edit')->name('edit.tags');
                Route::post('/update-tags/{id}', 'TagsController@Update')->name('update.tags');
                Route::get('/delete-tags/{id}', 'TagsController@Delete')->name('delete.tags');
            });
            Route::group(['prefix' => 'products'], function () {
                Route::get('/', 'ProductController@Index')->name('main.product');
                Route::get('products/Create-General-Info', 'ProductController@CreateGeneralInfo')->name('products.create.generalInfo');
                Route::post('products/Store-General-Info', 'ProductController@StoreGeneralInf')->name('products.store.generalInfo');
                Route::get('products/View-Stock/{product_id}', 'ProductController@ViewStock')->name('products.View.Stock');
                Route::post('products/store-Stock', 'ProductController@StoreStock')->name('products.Store.Stock');
                Route::get('products/View-Price/{product_id}', 'ProductController@ViewPrice')->name('products.View.Price');
                Route::post('products/store-Price', 'ProductController@StorePrice')->name('products.Store.Price');
                Route::get('products/View-Uploads/{product_id}', 'ProductController@ViewImages')->name('products.View.Upload');
                Route::post('products/store-Images', 'ProductController@StoreImages')->name('products.Store.Upload');
                Route::post('products/store-ImagesDB', 'ProductController@StoreImagesDB')->name('products.Store.UploadDB');
                Route::post('products/delete-Image/{product_id}/{id}', 'ProductController@DeleteImage')->name('product.Delete.Image');
            });
            Route::group(['prefix' => 'attributes'], function () {
                Route::get('/', 'AttributeController@Index')->name('main.attribute');
                Route::get('/create-attribute', 'AttributeController@Create')->name('create.attribute');
                Route::post('/store-attribute', 'AttributeController@Store')->name('store.attribute');
                Route::get('/edit-attribute/{id}', 'AttributeController@Edit')->name('edit.attribute');
                Route::post('/update-attribute/{id}', 'AttributeController@Update')->name('update.attribute');
                Route::get('/delete-attribute/{id}', 'AttributeController@Delete')->name('delete.attribute');
            });
            Route::group(['prefix' => 'option'], function () {
                Route::get('/option', 'OptionController@Index')->name('main.option');
                Route::get('/create-option', 'OptionController@Create')->name('create.option');
                Route::post('/store-option', 'OptionController@Store')->name('store.option');
                Route::get('/edit-option/{id}', 'OptionController@Edit')->name('edit.option');
                Route::post('/update-option/{id}', 'OptionController@Update')->name('update.option');
                Route::get('/delete-option/{id}', 'OptionController@Delete')->name('delete.option');
            });
            Route::group(['prefix' => 'slider'], function () {
                Route::get('slider/View-Uploads', 'SliderController@ViewImages')->name('slider.View.Upload');
                Route::post('slider/store-Images', 'SliderController@StoreImages')->name('slider.Store.Upload');
                Route::post('slider/store-ImagesDB', 'SliderController@StoreImagesDB')->name('slider.Store.UploadDB');
                Route::post('slider/delete-Image/{id}', 'SliderController@DeleteImage')->name('slider.Delete.Image');
            });
        });
        Route::group([
            "prefix" => "admin",
            "namespace" => "Dashboard",
            "middleware" => "guest:admin"
        ], function () {
            Route::get('login-admin', 'LoginController@ViewLogin')->name('admin.login');
            Route::post('login-admin', 'LoginController@Login')->name('login.admin');
        });
    }
);
