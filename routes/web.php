<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/template', function(){
    return view('template');
});

Auth::routes();

Route::get('/',function(){
    return view('welcome');
});

Route::group(['namespace' => 'Posts'], function(){
    Route::get('/post_show','PostController@post_show')->name('post_show');
    Route::get('/create_post','PostController@post_create')->name('create_post');
});

Route::group(['namespace' => 'Main'], function() {
    Route::get('/main', 'IndexController')->name('main');
});


