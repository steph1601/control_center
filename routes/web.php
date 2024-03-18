<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/cvsu_ils', function () {
    return view('welcome');
});

Route::get('/cvsu_ils/sample', function () {
    return view('file');
});

Route::get('/cvsu_ils/sample3', function () {
    return view('third');
});