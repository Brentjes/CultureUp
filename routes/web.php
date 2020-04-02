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

Route::get('/', function() {
    return view('home');
})->name('home')->middleware('auth');

Route::get('/proto', function() {
    return view('cases_proto');
})->name('cases_proto')->middleware('auth');

Route::get('/student', function() {
    return view('StudentPage.home');
})->name('Home')->middleware('auth');
