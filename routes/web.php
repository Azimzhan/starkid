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
    return view('welcome');
});

Route::get('/dash', function () {
    return view('main.dashboard');
});

Route::get('/about', function () {
    return view('main.about-course');
});

Route::get('/courses', function () {
    return view('main.courses');
});

Route::get('/edit/course', function () {
    return view('main.edit-course');
});

Route::get('/edit/lesson', function () {
    return view('main.edit-lesson');
});

Route::get('/lesson', function () {
    return view('main.lesson');
});

Route::get('/add/course', function () {
    return view('main.add-course');
});

Route::get('/awards', function () {
    return view('main.awards');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
