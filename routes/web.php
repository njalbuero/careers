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
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\JobsController;
use App\Http\Controllers\ApplicantsController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;

Route::get('/', [AuthenticatedSessionController::class, 'create'])
    ->middleware('guest')
    ->name('login');

Route::group(['middleware' => ['auth']], function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    Route::get('/backoffice/dashboard', [DashboardController::class, 'index']);
    Route::get('/backoffice/analytics/{department}', [DashboardController::class, 'analytics']);

    Route::get('/backoffice/listings/{department}', [JobsController::class, 'index']);
    Route::get('/backoffice/listings/{department}/{job}/view', [JobsController::class, 'view']);

    Route::get('/backoffice/applicants/{department}', [ApplicantsController::class, 'index']);
    Route::get('/backoffice/applicants/{department}/{job}/view', [ApplicantsController::class, 'view']);
});

Route::group(['middleware' => ['auth', 'role:superadministrator']], function () {
    Route::get('/backoffice/listings/{department}/create', [JobsController::class, 'create']);
    Route::post('/backoffice/listings/{department}', [JobsController::class, 'store']);
    Route::get('/backoffice/listings/{department}/{job}/edit', [JobsController::class, 'edit']);
    Route::put('/backoffice/listings/{department}/{job}', [JobsController::class, 'update']);
    Route::delete('/backoffice/listings/{department}/{job}', [JobsController::class, 'destroy']);

    Route::get('/backoffice/applicants/{department}/create', [ApplicantsController::class, 'create']);
    Route::post('/backoffice/applicants/{department}', [ApplicantsController::class, 'store']);
    Route::get('/backoffice/applicants/{department}/{applicant}/edit', [ApplicantsController::class, 'edit']);
    Route::put('/backoffice/applicants/{department}/{applicant}', [ApplicantsController::class, 'update']);
    Route::delete('/backoffice/applicants/{department}/{applicant}', [ApplicantsController::class, 'destroy']);
});


require __DIR__ . '/auth.php';
