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


Route::get('/admin', function () {
    return view('home');
})->name('home')->middleware('auth');

Route::get('/assignments', function () {
    return view('cases_proto');
})->name('cases_proto')->middleware('auth');

Route::get('/{name}', function () {
    return view('StudentPage.home');
})->where('name', 'home||')->name('Home')->middleware('auth');

Route::get('/profile/{id?}', 'UserController@show')->name('profile')->middleware('auth');

Route::get('/leaderboard', function () {
    return view('StudentPage.leaderboard');
})->name('Leaderboard')->middleware('auth');

Route::get('/logout', function () {
    Auth::logout();
    return view('home');
})->name('home')->middleware('auth');

//Route::resource('test', 'PageController');

Route::group(array('prefix' => 'assignment'), function () {
    Route::group(array('prefix' => 'editor'), function () {
        //replace test and test2 with better names
        // assignment/editor/test2
        Route::resource('currentPage/{assignmentID}/page', 'PageEditorController')->middleware('auth');
        Route::resource('current', 'AssignmentEditorController')->middleware('auth');
    });
    // assignment/view

    Route::resource('view/{assignmentID}/page', 'PageController',
        ['parameters' => ['page' => 'assignment'
        ]])->middleware('auth');
    Route::resource('view', 'AssignmentController',
        ['parameters' => ['view' => 'assignment'
        ]])->middleware('auth');
});

Route::get('DokSTestingStuffDontTouch', function () {
    session()->regenerate();
    return response()->json([
        "token" => csrf_token()],
        200);
})->name('home')->middleware('auth');

Route::put('DokSTestingStuff/{id}', 'AssignmentEditorController@dumbTest')->middleware('auth');
