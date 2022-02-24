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

Route::get('/home', 'App\Http\Controllers\CompanyController@list')->name('company_form');
Route::post('/home', 'App\Http\Controllers\CompanyController@save')->name('add_company');

Route::get('/home/company/delete/{id}', 'App\Http\Controllers\CompanyController@delete')->name('delete_company');
Route::delete('/home/company/delete/{id}', 'App\Http\Controllers\CompanyController@delete')->name('delete_company');
