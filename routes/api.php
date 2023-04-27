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

Route::get('companie', 'CompaniesController@getAllCompanies');
Route::get('companie/{id}', 'CompaniesController@getCompanie');
Route::post('companie', 'CompaniesController@createCompanie');
Route::put('companie/{id}', 'CompaniesController@updateCompanie');
Route::delete('companie/{id}','CompaniesController@deleteCompanie');

Route::get('job', 'JobsController@getAllJobs');
Route::get('job/{id}', 'JobsController@getJob');
Route::post('job', 'JobsController@createJob');
Route::put('job/{id}', 'JobsController@updateJob');
Route::delete('job/{id}','JobsController@deleteJob');
