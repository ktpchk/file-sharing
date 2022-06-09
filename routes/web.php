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

Route::get('/terms', function () {
    return view('terms');
});

Route::get('/faq', function () {
    return view('faq');
});

Route::controller(FileController::class)->group(function () {
    // Show Create Form
    Route::get('/', 'create');

    // Show Latest Files
    Route::get('/files/latest', 'index');

    // Show Single File
    Route::get('/files/{file}', 'show');

    // Download File
    Route::get('/files/{file}/download', 'download');

    Route::middleware('auth')->group(function () {
        // Upload File
        Route::post('/files', 'store');

        // Show Edit Form
        Route::get('/files/{file}/edit', 'edit');

        // Update File Data
        Route::patch('/files/{file}', 'update');

        // Delete File
        Route::delete('/files/{file}', 'destroy');

        // Manage Files
        Route::get('/files/manage', 'manage');

        // Add Comment
        Route::post('/files/{file}/comments', 'addComment');
    });
});

Route::controller(UserController::class)->group(function () {

    Route::middleware('auth')->group(function () {
        // Logout User
        Route::post('/logout', 'logout');
    });

    Route::middleware('guest')->group(function () {
        // Show Register/Create Form
        Route::get('/register', 'create');

        // Create New User
        Route::post('/users', 'store');

        // Show Login Form
        Route::get('/login', 'login')->name('login');

        // Log In User
        Route::post('/users/authenticate', 'authenticate');
    });
});
