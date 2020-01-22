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
    return view('frontend.index');
});
Route::get('/listing', function () {
    return view('frontend.listing');
});
Route::get('/detail', function () {
    return view('frontend.detail');
});
Route::get('/dashboard', function () {
    return view('frontend.dashboard');
});