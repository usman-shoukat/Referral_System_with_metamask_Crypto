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

Route::post('/signin', 'Auth\LoginController@signin')->name('signin');
Route::post('/signup', 'Auth\RegisterController@signup')->name('signup');

Route::get('/register/{ref}', 'Auth\RegisterController@getformsignupref')->name('form.signup.ref');
Route::post('/signup/{ref}', 'Auth\RegisterController@signupref')->name('signup.ref');
Route::get('/home', 'HomeController@index')->name('home');
