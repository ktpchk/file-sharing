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

// Show Main Page
Route::get('/', function () {
    return view('files.index');
});

// Show Latest Files
Route::get('/latest', function () {
    return view('files.latest');
});

// Show Single File
Route::get('/latest/{id}', function ($id) {
    return view('files.show');
})->where('id', '\d+');
