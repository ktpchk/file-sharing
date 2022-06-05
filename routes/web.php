<?php

use App\Models\File;
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
    return view('files.latest', [
        'files' => File::get()
    ]);
});

// Show Single File
Route::get('/latest/{file}', function (File $file) {
    return view('files.show', [
        'file' => $file
    ]);
})->where('file', '\d+');
