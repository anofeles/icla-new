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

Route::get('/home/{locale}', 'HomeController@index')->name('admin.home');

Route::prefix('menu')->group(function (){
    Route::get('/{locale}','HomeController@menuindex')->name('admin.menu');
    Route::get('/add/{locale}','HomeController@addmenu')->name('admin.menu.add');
    Route::post('/add/{locale}','HomeController@addmenu')->name('admin.menu.add');
    Route::get('/edit/{postid}/{locale}','HomeController@editmenu')->name('admin.menu.edit');
    Route::post('/edit/{postid}/{locale}','HomeController@editmenu')->name('admin.menu.edit');
    Route::get('/delete/{postid}/{locale}','HomeController@deletemenu')->name('admin.menu.delete');
});

Route::prefix('post')->group(function (){
    Route::get('/{locale}','HomeController@postindex')->name('admin.post');
    Route::get('/add/{locale}','HomeController@addpost')->name('admin.post.add');
    Route::post('/add/{locale}','HomeController@addpost')->name('admin.post.add');
    Route::get('/edit/{postid}/{locale}','HomeController@editpost')->name('admin.post.edit');
    Route::post('/edit/{postid}/{locale}','HomeController@editpost')->name('admin.post.edit');
    Route::get('/delete/{postid}/{locale}','HomeController@deletepost')->name('admin.post.delete');
});

Route::namespace('\App\Http\Controllers\Auth')->group(function (){
    Route::get('logout', 'LoginController@logout')->name('admin.home.logout');
});
