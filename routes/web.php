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
Route::namespace('Fromt')->group(function (){
    Route::get('/', 'Webcontroller@index')->name('home');
    Route::get('/home/{locale}', 'Webcontroller@index')->name('home.leng');
    Route::get('/post/item/{menuid}/{locale}', 'Webcontroller@page')->name('home.menu');
    Route::get('/post/full/{menuid}/{postid}/{locale}', 'Webcontroller@pagefull')->name('home.post');
    Route::any('/post/search/{menuid}/{locale}', 'Webcontroller@pagesearch')->name('home.post.search');

    Route::get('{locale}/special', 'Webcontroller@special')->name('home.special');
    Route::post('{locale}/special', 'Webcontroller@special')->name('home.special');

    Route::get('{locale}/individual', 'Webcontroller@individual')->name('home.individual');
    Route::post('{locale}/individual', 'Webcontroller@individual')->name('home.individual');

    Route::get('{locale}/group', 'Webcontroller@group')->name('home.group');
    Route::post('{locale}/group', 'Webcontroller@group')->name('home.group');
});


// Authentication Routes...
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');

// Registration Routes...
Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
Route::post('register', 'Auth\RegisterController@register');

// Password Reset Routes...
Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
Route::post('password/reset', 'Auth\ResetPasswordController@reset')->name('password.update');

// Email Verification Routes...
Route::get('email/verify', 'Auth\VerificationController@show')->name('verification.notice');
Route::get('email/verify/{id}', 'Auth\VerificationController@verify')->name('verification.verify');

