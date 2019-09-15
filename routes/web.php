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

Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
//Route::group(['middleware' => ['auth']], function (){
//    Route::post('favorite/{post}/add', 'InformationController@index')->name('information.index');
//    Route::post('comment/store', 'CommentController@store')->name('comment.store');
//});
//Admin route group
Route::group(['as'=>'admin.', 'prefix'=>'admin', 'namespace'=>'Admin', 'middleware'=>['auth', 'admin']], function (){
    Route::get('dashboard', 'DashboardController@index')->name('dashboard');
    Route::resource('category', 'CategoryController');
    Route::resource('notice', 'NoticeController');
//    Route::get('information', 'InformationController')->name('information.index');
//    Route::post('information/{}/edit', 'InformationController@edit')->name('information.edit');
});

//moderator route group
Route::group(['as'=>'moderator.', 'prefix'=>'moderator', 'namespace'=>'Moderator', 'middleware'=>['auth', 'moderator']], function (){
    Route::get('dashboard', 'DashboardController@index')->name('dashboard');
    Route::resource('notice', 'NoticeController');
    Route::get('information', 'InformationController@index')->name('information.index');
    Route::get('information/edit', 'InformationController@edit')->name('information.edit');
    Route::post('information/update', 'InformationController@update')->name('information.update');
});

//user router group
Route::group(['as'=>'user.', 'prefix'=>'user', 'namespace'=>'User', 'middleware'=>['auth', 'user']], function (){
    Route::get('dashboard', 'DashboardController@index')->name('dashboard');
});
