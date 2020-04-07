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

Route::get('/home', function() {
    return view('home');
})->name('home')->middleware('auth');

//Route::resource('test', 'PageController');

Route::group(array('prefix' => 'assignment'), function() {
    Route::group(array('prefix' => 'editor'), function() {
        Route::resource('{assignmentID}/page', 'PageEditorController')->middleware('auth');
        Route::resource('/', 'AssignmentController')->middleware('auth');
    });
    Route::resource('{assignmentID}/page', 'PageController')->middleware('auth');
});



