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

Route::get('/', function () {
    return view('index');
});

Route::get('/start_project', 'ProjectController@startProject');

Route::get('/project_created', 'ProjectController@projectCreated');

Auth::routes();

Route::resource('/project', 'ProjectController');

Route::resource('/services', 'ServicesController');

Route::view('/404', 'error.404');

Route::view('/our_services', 'menu.services');

Route::view('/contact_us', 'menu.services');

Route::view('/approach', 'menu.approach');

Route::view('/about', 'menu.about');

Route::view('/others', 'menu.others');

Route::get('/home', 'HomeController@index')->name('home');
