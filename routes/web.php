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

// Pages
Route::get('/', 'PagesController@index');
Route::get('/development', 'PagesController@development');
Route::get('/devops', 'PagesController@devops');
Route::get('/careers', 'PagesController@careers');
Route::get('/contact-us', 'PagesController@contact');

// Administrator
Route::get('/administrator', 'AdminController@login');
Route::get('/forgot-password', 'AdminController@forgot');