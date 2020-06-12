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

Route::get('/awards', function () {
    return view('main.awards');
});

Route::get('/lessons-info', function () {
    return view('main.lessons-info');
});

Route::get('/manage/courses', function () {
    return view('main.manage-course');
});




Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'CourseController@index')->middleware('auth');

Route::group(['prefix'=>'add','middleware'=>'isTeacher'], function () {
    Route::get('/course', 'CourseController@addCourseIndex')->middleware('auth');
});

// MARK: API routes
Route::post('add/course', 'CourseController@addCourse');

Route::get('/get/user', 'CourseController@get_user_data');
Route::get('/get/lessons/{id}', 'LessonController@getAllCourseLessons');
Route::get('/get/lesson/{id}/comments', 'LessonController@getLessonComments');
Route::get('/get/lesson/{id}/docs', 'LessonController@getLessonDocs');

Route::get('/url', function () {
    return response()->json([url('/')]);
});
