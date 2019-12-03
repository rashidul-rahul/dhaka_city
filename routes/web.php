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
Route::get('notice/view', 'IndexController@notice_view')->name('notice.view');
Route::get('about', 'IndexController@about')->name('about');
Route::get('information', 'IndexController@information')->name('information');
Route::post('feedback/', 'FeedbackController@create')->name('feedback.create');
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
    Route::post('user/role', 'UserController@update_role')->name('user.role');
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
    Route::resource('user', 'UserController');
});

//user router group
Route::group(['as'=>'user.', 'prefix'=>'user', 'namespace'=>'User', 'middleware'=>['auth', 'user']], function (){
    Route::get('dashboard', 'DashboardController@index')->name('dashboard');
    Route::get('notice', 'NoticeController@index')->name('notice.index');
    Route::get('notice/{notice} ', 'NoticeController@show')->name('notice.show');
    Route::get('complain', 'ComplainController@index')->name('complain.index');
    Route::get('complain/{complain} ', 'ComplainController@show')->name('complain.show');
});
