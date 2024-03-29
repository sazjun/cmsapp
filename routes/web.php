<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('admin', ['middleware'=>'isadmin',function () {
    return view('admin');
}]);

Route::get('user',['middleware'=>'auth', function () {
    return view('user');
}]);

Auth::routes();

