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

<<<<<<< HEAD
Route::get('/', function () {
    return view('welcome');
});
=======
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
// Route::get('/administrator/user', 'UserController@user');
// Route::get('/administrator/user/create', 'UserController@create');

//Pages Content
Route::get('/administrator/pages', 'PagesContentController@listPages');
Route::get('/administrator/pages/edit/{id}', 'PagesContentController@edit');
Route::post('/administrator/pages/edit', 'PagesContentController@update');

// Application Form
Route::get('/administrator/contact-form', 'AdminController@contactList');
Route::delete('/administrator/contact-form/delete/{id}', 'AdminController@contactDelete');
Route::get('/administrator/careers-form', 'CareersController@applyJobList');
Route::delete('/administrator/careers-form/delete/{id}', 'CareersController@applyJobDelete');

// Careers Content
Route::get('/administrator/careers', 'CareersController@view');
Route::get('/administrator/careers/create', 'CareersController@create');
Route::post('/administrator/careers/create', 'CareersController@store');
Route::get('/administrator/careers/edit/{id}', 'CareersController@edit');
Route::post('/administrator/careers/edit', 'CareersController@update');
Route::delete('/administrator/careers/delete/{id}', 'CareersController@delete');

// Clients
Route::get('/administrator/clients', 'ClientsController@view');
Route::get('/administrator/clients/create', 'ClientsController@create');
Route::post('/administrator/clients/create', 'ClientsController@store');
Route::get('/administrator/clients/edit/{id}', 'ClientsController@edit');
Route::post('/administrator/clients/edit', 'ClientsController@update');
Route::delete('/administrator/clients/delete/{id}', 'ClientsController@delete');
>>>>>>> develop
