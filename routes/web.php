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

Route::get('/home', 'App\Http\Controllers\CompanyController@list');
Route::post('/home', 'App\Http\Controllers\CompanyController@save')->name('addCompany');

Route::get('/home/company/delete/{id}', 'App\Http\Controllers\CompanyController@delete')->name('deleteCompany');
Route::delete('/home/company/delete/{id}', 'App\Http\Controllers\CompanyController@delete')->name('deleteCompany');

Route::get('/home/company/list/{id}', 'App\Http\Controllers\ParticipantController@list')->name('listParticipants');