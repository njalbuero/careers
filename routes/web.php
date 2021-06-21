<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\JobsController;

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
Route::get('/backoffice/dashboard', [DashboardController::class, 'index']);
Route::get('/backoffice/analytics/{department}', [DashboardController::class, 'analytics']);
Route::get('/backoffice/listings/{department}', [JobsController::class, 'index']);
Route::get('/backoffice/listings/{department}/create', [JobsController::class, 'create']);
Route::post('/backoffice/listings/{department}', [JobsController::class, 'store']);
Route::get('/backoffice/listings/{department}/{job}/view', [JobsController::class, 'view']);
Route::get('/backoffice/listings/{department}/{job}/edit', [JobsController::class, 'edit']);
Route::put('/backoffice/listings/{department}/{job}', [JobsController::class, 'update']);
Route::delete('/backoffice/listings/{department}/{job}', [JobsController::class, 'destroy']);