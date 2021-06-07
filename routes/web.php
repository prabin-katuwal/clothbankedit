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
Route::group(['prefix'=>'admin'], function(){
    Route::get('dashboard','DashboardController@dashboard')->name('dashboard');
    Route::get('bank','BankController@index')->name('bank.index');
    Route::post('bank/store','BankController@store')->name('bank.store');
    Route::get('donar','DonarController@index')->name('donar.index');
    Route::get('donar/profile','DonarController@profile')->name('donar.profile');
    Route::get('add/bank/{id}','BankController@addbank')->name('add.bank');
});
// Route::get('dashboard','DashboardController@dashboard')->name('dashboard');
Route::get('/','FrontendController@index')->name('index');
Route::post('donar/add','FrontendController@donaradd')->name('donar.add');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
