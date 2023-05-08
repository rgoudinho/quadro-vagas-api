<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('company', 'CompaniesController@getAllCompanies');
Route::get('company/{id}', 'CompaniesController@getCompany');
Route::post('company', 'CompaniesController@createCompany');
Route::put('company/{id}', 'CompaniesController@updateCompany');
Route::delete('company/{id}','CompaniesController@deleteCompany');

Route::get('job', 'JobsController@getAllJobs');
Route::get('job/{id}', 'JobsController@getJob');
Route::post('job', 'JobsController@createJob');
Route::put('job/{id}', 'JobsController@updateJob');
Route::delete('job/{id}','JobsController@deleteJob');
