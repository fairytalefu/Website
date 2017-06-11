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
Route::get('/profile', function () {
    return view('profile');
})->name('profile');
Route::get('profile','UserController@profile')->name('profile');
Route::post('profile','UserController@update_avatar');
Route::post('updateUserInfo','UserController@updateUserInfo')->name('updateUserInfo');
Route::get('chart',function (){
   return view('test.chart');
});
Route::get('dashboard','DashBoardController@index');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
