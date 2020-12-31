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



Auth::routes();
Route::get('/', function () {
    return view('home.index');
});



Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath']
    ],
    function () {

        Route::group([
            "prefix" => "site",
            "namespace" => "Site",
            "middleware" => [auth','VerifyMobile']
        ], function () {
            Route::get('profile',function(){
                return "tttttttttttttttttttttt";
            });
            Route::get('verify',function(){
                return view('');
            })->name('verify');
        });

        Route::group([
            "prefix" => "site",
            "namespace" => "Site",
            "middleware" => "guest:web"
        ], function () {
          
        });
    }
);
