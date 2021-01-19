<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Site Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/








Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath']
    ],
    /**
     * public site
     */
    function () {
        Route::group([
            "prefix" => "site",
            "namespace" => "Site",
        ], function () {
            Route::get('/', 'HomeController@Index')->name('home')->middleware('VerifyMobile');
            Route::get('category/{slug}','categoryController@CategoryBySlug')->name('cat-slug');
            Route::get('single-product/{slug}','SingleProductController@Index')->name('single.product.view');
        
        });
        Auth::routes();
        /**
         * auth and verify mobile
         */
        Route::group([
            "prefix" => "site",
            "namespace" => "Site",
            "middleware" => ['auth', 'VerifyMobile']
        ], function () {
            Route::get('profile', function () {
                return "you are authetcate";
            });
        });
        /** auth  */
        Route::group([
            "prefix" => "site",
            "namespace" => "Site",
            "middleware" => "auth"
        ], function () {
            Route::post('verifyUser/', 'VerificationCodeController@verify')->name('verify-user');
            Route::get('verify', 'VerificationCodeController@GetForm')->name('verifyPage');
            Route::post('wishlist-product','WishListController@Store')->name('wishlist');
            Route::get('view-wishlist','WishListController@Index')->name('view.wishlist');
            Route::post('delete-product-wishlist','WishListController@Destroy')->name('delete.product.wishlist');

            Route::group([
                "prefix" => "cart"]
                ,function(){
                    Route::get('view-cart','CartController@ViewCart')->name('view-cart');
                    Route::post('add-to-cart/{slug?}','CartController@AddToCart')->name('add-cart');
                    Route::post('delete-item-cart/{id?}')

                });
           
        });
        /**
         * guest
         */

        Route::group([
            "prefix" => "site",
            "namespace" => "Site",
            "middleware" => "guest:web"
        ], function () {
        });
    }
);
