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

Route::get('/', 'IssuesController@issues');

Auth::routes();
Route::get('health/issues', 'IssuesController@issues');
Route::post('health/getresult', 'IssuesController@result')->name('issues.search');
Route::post('contact', 'IssuesController@contact')->name('contact.form');