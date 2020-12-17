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


Route::resource('employee','EmployeeController');
Route::get('/getindexpagetable/', 'EmployeeController@indexpagetable')->name('datatable.indexpagetable');

/*theme*/

Route::resource('theme','ThemeController');
Route::get('/Dashboard2/', 'ThemeController@new2')->name('dashboard.index2');
Route::get('/Dashboard3/', 'ThemeController@new3')->name('dashboard.index3');


/*picture store*/

Route::resource('picturestore','PictureStoreController');

/*Ajax*/

Route::resource('ajax','AjaxController');

