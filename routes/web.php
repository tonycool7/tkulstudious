php<?php

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

Route::get('/', function () {
    return view('index');
});

Route::get('/start_project', 'ProjectController@startProject');

Route::get('/start_projec', 'ProjectController@startProject');

Route::get('/project_created', 'ProjectController@projectCreated');

Auth::routes();

Route::resource('/project', 'ProjectController');

Route::resource('/services', 'ServicesController');

Route::view('/404', 'error.404');

Route::view('/our_services', 'menu.services');

Route::get('/contact_us', 'ProjectController@startProject');

Route::view('/approach', 'menu.approach');

Route::view('/access_denied', 'error.access_denied');

Route::resource('/invoice', 'InvoiceController');

Route::get('/expenses/report', 'ExpensesController@report');

Route::post('/expenses/report', 'ExpensesController@reportToPdf');

Route::resource('/expenses', 'ExpensesController');

Route::resource('/expenses_category', 'ExpensesCategoryController');

Route::view('/about', 'menu.about');

Route::view('/careers', 'menu.job');

Route::view('/projects', 'menu.projects');

Route::view('/others', 'menu.others');

Route::get('/home', 'HomeController@index')->name('home');


