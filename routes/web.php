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


Auth::routes();
// Administrator
Route::get('/logout', 'AdminController@logout');
Route::get('/administrator', 'Auth\LoginController@loginAdmin');
Route::get('/administrator/dashboard', 'AdminController@dashboard');

//User
Route::get('/administrator/user', 'UserController@user');
Route::get('/administrator/user/create', 'UserController@create');