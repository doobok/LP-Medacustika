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
    return view('layouts.pages.homepage');
});

Route::get('/1', function () {
    return view('layouts.pages.1-land');
});

// страницы после...
Route::get('/phone-wait-call-manager', function () {  return view('layouts.simple-pages.page-after-record-consultation'); });
