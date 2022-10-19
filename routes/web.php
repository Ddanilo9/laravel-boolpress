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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

// Route::middleware('auth')->get('admin/home', 'Admin\HomeController@index')->name('admin.home');

Route::middleware('auth') //middleware
->prefix('admin')  //prefisso nome
->name('admin.')  //prefisso nome rotta
->namespace('Admin') //prefisso namespace controller
->group(function(){

    Route::get('/home', 'HomeController@index')->name('home');

    Route::resource('posts', 'PostController');
});
