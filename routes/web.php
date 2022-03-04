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

Route::get('/home', 'App\Http\Controllers\CompanyController@list')->name('companyForm');
Route::post('/home', 'App\Http\Controllers\CompanyController@save')->name('addCompany');

Route::get('/home/company/delete/{id}', 'App\Http\Controllers\CompanyController@delete')->name('deleteCompany');
Route::delete('/home/company/delete/{id}', 'App\Http\Controllers\CompanyController@delete')->name('deleteCompany');

Route::get('/home/company/list/{id}', 'App\Http\Controllers\ParticipantController@list')->name('listParticipants');
Route::post('/home/company/list/{id}', 'App\Http\Controllers\ParticipantController@add')->name('addParticipant');

Route::get('/home/company/delete/{companyId}/{participantId}', 'App\Http\Controllers\ParticipantController@remove')->name('removeParticipant');

Route::get('/home/company/split/{id}', 'App\Http\Controllers\CompanyController@split')->name('split');
