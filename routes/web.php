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

// DEFINE HOMEPAGE
Route::get('/', function () {
    return view('jobs.index');
});


// DEFINE SHOW Page
Route::get('/jobs/show', function () {
    return view('jobs.SHOW');
});

// DEFINE CATEGORY Page
Route::get('/category/index', function () {
    return view('category.index');
});

// DEFINE Author Page
Route::get('/author/index', function () {
    return view('author.index');
});

// DEFINE About Page
Route::get('/about/index', function () {
    return view('about.index');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
