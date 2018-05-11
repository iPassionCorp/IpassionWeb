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
Route::post('/careers', 'PagesController@applyJob');
Route::get('/contact-us', 'PagesController@contact');
Route::post('/contact-us', 'PagesController@postContact');


Auth::routes();
// Administrator
Route::get('/logout', 'AdminController@logout');
Route::get('/administrator', 'Auth\LoginController@loginAdmin');
Route::get('/administrator/dashboard', 'AdminController@dashboard');

//User
Route::get('/administrator/user', 'UserController@user');
Route::get('/administrator/user/create', 'UserController@create');

//Pages Content
Route::get('/administrator/pages', 'PagesContentController@listPages');
// Route::get('/administrator/pages/create', 'PagesContentController@create');
// Route::post('/administrator/pages/create', 'PagesContentController@store');
Route::get('/administrator/pages/edit/{id}', 'PagesContentController@edit');
Route::post('/administrator/pages/edit', 'PagesContentController@update');
// Route::delete('/administrator/pages/delete/{id}', 'PagesContentController@delete');

// Application Form
Route::get('/administrator/contact-form', 'AdminController@contactList');
Route::delete('/administrator/contact-form/delete/{id}', 'AdminController@contactDelete');
Route::get('/administrator/careers-form', 'CareersController@applyJobList');
Route::delete('/administrator/careers-form/delete/{id}', 'CareersController@applyJobDelete');
