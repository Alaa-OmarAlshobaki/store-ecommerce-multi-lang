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
Route::group(["namespace"=>"Dashboard","middleware"=>"auth:admin"],function(){
    Route::get('admin','AdminController@All_Admin');
});
Route::group(["namespace"=>"Dashboard"])