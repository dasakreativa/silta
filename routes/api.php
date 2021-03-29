<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/**
 * Calling All Classes On Controllers
 *
 * @author Dasa Kreativa Studio
 * @since  1.0.0
 */
use \App\Http\Controllers\AuthLogin;
use \App\Http\Controllers\MiddlewaresApi;
use \App\Http\Controllers\VerificationController;
use \App\Http\Controllers\siswa\GlobalController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// For Login
Route::post('auth/login', [AuthLogin::class, 'login']);
Route::any('auth/logout', [AuthLogin::class, 'logout']);

// For Verification
Route::any('verify', [VerificationController::class, 'sendVerify']);
Route::any('verify/code', [VerificationController::class, 'retriveVerify']);
Route::any('verify/validate', [VerificationController::class, 'validate']);

// For Middlewares
Route::any('middlewares/no-auth', [MiddlewaresApi::class, 'nologin']);
Route::any('middlewares/admin', [MiddlewaresApi::class, 'admin']);
Route::any('middlewares/pegawai', [MiddlewaresApi::class, 'pegawai']);
Route::any('middlewares/siswa', [MiddlewaresApi::class, 'siswa']);
Route::any('middlewares/guru', [MiddlewaresApi::class, 'guru']);

// For Backend Global
Route::any('siswa/data-diri', [GlobalController::class, 'dataDiri']);

// For Backend (Siswa)
// For Backend (Guru)
// For Backend (Pegawai)
// For Backend (Admin)

// For Debugging
Route::any('/debugging/config', function() {
	dd(config('mail.from'));
});