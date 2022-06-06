<?php

use App\Http\Controllers\FileController;

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

// Show Create Form
Route::get('/', [FileController::class, 'create']);

// Show Latest Files
Route::get('/latest', [FileController::class, 'index']);

// Show Single File
Route::get('/latest/{file}', [FileController::class, 'show']);

// Upload File
Route::post('/files', [FileController::class, 'store']);

// Download File
Route::get('/files/{file}/download', [FileController::class, 'download']);
