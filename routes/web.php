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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


// DEFINE HOMEPAGE
//  Route::get('/', function () { return view('jobs.index'); });
Route::get('/', 'JobController@index');

// DEFINE SHOW Page
//  Route::get('/jobs/show', function () { return view('jobs.SHOW'); });
Route::get('/jobs/{job}', 'JobController@show');

// DEFINE CATEGORY Page
//  Route::get('/category/index', function () { return view('category.index'); });
Route::get('/category/{category}', 'JobController@category')->name('category');


// DEFINE Author Page
//  Route::get('/author/index', function () { return view('author.index'); });
Route::get('/author/{author}', 'JobController@author');

// DEFINE About Page
//  Route::get('/about/index', function () { return view('about.index'); });
Route::get('/about/index', 'JobController@about');

