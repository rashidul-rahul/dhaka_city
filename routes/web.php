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
Route::get('about', 'IndexController@about')->name('about');
Route::get('information', 'IndexController@information')->name('information');
Route::resource("complain", "ComplainController");

Auth::routes();



//Admin route group
Route::group(['as'=>'admin.', 'prefix'=>'admin', 'namespace'=>'Admin', 'middleware'=>['auth', 'admin']], function (){
    Route::get('dashboard', 'DashboardController@index')->name('dashboard');
    Route::resource('category', 'CategoryController');
    Route::resource('notice', 'NoticeController');
    Route::resource('content', 'ContentController');
    Route::get('information', 'InformationController@index')->name('information.index');
    Route::get('information/edit', 'InformationController@edit')->name('information.edit');
    Route::post('information/update', 'InformationController@update')->name('information.update');
    Route::resource('complain', 'ComplainController');
    Route::resource('user', 'UserController');
});

//moderator route group
Route::group(['as'=>'moderator.', 'prefix'=>'moderator', 'namespace'=>'Moderator', 'middleware'=>['auth', 'moderator']], function (){
    Route::get('dashboard', 'DashboardController@index')->name('dashboard');
    Route::resource('notice', 'NoticeController');
    Route::resource('content', 'ContentController');
    Route::get('information', 'InformationController@index')->name('information.index');
    Route::get('information/edit', 'InformationController@edit')->name('information.edit');
    Route::post('information/update', 'InformationController@update')->name('information.update');
    Route::resource('complain', 'ComplainController');
});

//user router group
Route::group(['as'=>'user.', 'prefix'=>'user', 'namespace'=>'User', 'middleware'=>['auth', 'user']], function (){
    Route::get('dashboard', 'DashboardController@index')->name('dashboard');
});
