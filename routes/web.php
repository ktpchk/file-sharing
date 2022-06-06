<?php

use App\Http\Controllers\FileController;
use App\Http\Controllers\UserController;
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

Route::controller(FileController::class)->group(function () {
    // Show Create Form
    Route::get('/', 'create');

    // Show Latest Files
    Route::get('/files/latest', 'index');

    // Show Single File
    Route::get('/files/{file}', 'show');

    // Upload File
    Route::post('/files', 'store');

    // Show Edit Form

    // Update File Data

    // Delete File

    // Manage Files

    // Download File
    Route::get('/files/{file}/download', 'download');
});

Route::controller(UserController::class)->group(function () {
    // Show Register/Create Form
    Route::get('/register', 'create');

    // Create New User
    Route::post('/users', 'store');

    // Show Login Form
    Route::get('/login', 'login');

    // Log In User
    Route::post('/users/authenticate', 'authenticate');

    // Logout User
    Route::post('/logout', 'logout');
});
