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
Route::get('chart','TestController@toChart');
Route::get('echarts',function (){
    return view('test.charts');
});
Route::get('table','TestController@array_table');
Route::get('tb','TestController@index');
Route::get('gettemp','DashBoardController@array_Temp');
Route::get('getIrr','DashBoardController@array_Irr');
Route::get('getCurrent','DashBoardController@array_Current');
Route::get('getVoltage','DashBoardController@array_Voltage');
Route::get('getPower','DashBoardController@array_Power');
Route::get('getArray','DashBoardController@array_Data');

Route::get('testEx','TestController@testExcel');

//Route::resource('/api/{station_id}/{device_id}/{id}','DataController');
Route::get('dashboard','DashBoardController@index');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
