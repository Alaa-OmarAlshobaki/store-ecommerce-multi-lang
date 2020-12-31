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
    function () {
        Auth::routes();
        Route::get('/', function () {
            return view('home.index');
        });

        Route::group([
            "prefix" => "site",
            "namespace" => "Site",
            "middleware" => ['auth', 'VerifyMobile']
        ], function () {
            Route::get('profile', function () {
                return "you are authetcate";
            });
        });
        Route::group([
            "prefix" => "site",
            "namespace" => "Site",
            "middleware" => "auth"
        ], function () {
            Route::post('verifyUser/', 'VerificationCodeController@verify')->name('verify-user');
            Route::get('verify','VerificationCodeController@GetForm')->name('verifyP');
        });

        Route::group([
            "prefix" => "site",
            "namespace" => "Site",
            "middleware" => "guest:web"
        ], function () {
        });
    }
);
