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

Route::get('/', 'IndexController@index')->name('home');
Route::get('notice', 'IndexController@notice')->name('notice');

Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');

Route::group(['as'=>'admin.', 'prefix'=>'admin', 'namespace'=>'Admin', 'middleware'=>['auth', 'admin']], function (){
    Route::get('dashboard', 'DashboardController@index')->name('dashboard');
    Route::resource('category', 'CategoryController');
    Route::resource('notice', 'NoticeController');
});
Route::group(['as'=>'moderator.', 'prefix'=>'moderator', 'namespace'=>'Moderator', 'middleware'=>['auth', 'moderator']], function (){
    Route::get('dashboard', 'DashboardController@index')->name('dashboard');
});
Route::group(['as'=>'user.', 'prefix'=>'user', 'namespace'=>'User', 'middleware'=>['auth', 'user']], function (){
    Route::get('dashboard', 'DashboardController@index')->name('dashboard');
});
