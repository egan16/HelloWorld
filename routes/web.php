<?php
# @Author: michaelegan
# @Date:   2019-09-09T17:26:19+01:00
# @Last modified by:   michaelegan
# @Last modified time: 2019-09-24T14:16:36+01:00




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

Route::get('/HelloWorld', function () {
    return '<h1>UP THE DUB</h1>';
});

Route::get('/mikey', function () {
    return view('mikey');
});

Route::get('/about', function () {
    return view('about');
});
