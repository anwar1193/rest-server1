<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\MahasiswaController;


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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Read
Route::get('mahasiswa', [MahasiswaController::class, 'index']);

// Create
Route::post('mahasiswa/store', [MahasiswaController::class, 'store']);

// Show 1 Data (Bisa untuk view edit)
Route::get('mahasiswa/show/{id}', [MahasiswaController::class, 'show']);

// Update Data
Route::post('mahasiswa/update/{id}', [MahasiswaController::class, 'update']);

// Delete Data
Route::get('mahasiswa/destroy/{id}', [MahasiswaController::class, 'destroy']);