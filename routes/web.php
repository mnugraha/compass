<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UtamaController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/master', [UtamaController::class, 'index']);
Route::get('/', [UtamaController::class, 'dashboard']);
Route::get('/contoh', [UtamaController::class, 'contoh']);
Route::get('/dashboard', [UtamaController::class, 'dashboard']);
Route::get('/profile', [UtamaController::class, 'profil']);
Route::get('/login', [UtamaController::class, 'login']);
Route::get('/logout', [UtamaController::class, 'logout']);
Route::post('/login_proses', [UtamaController::class, 'login_proses']);
Route::get('/A', [UtamaController::class, 'A']);
Route::get('/B', [UtamaController::class, 'B']);
Route::get('/C', [UtamaController::class, 'C']);
Route::get('/D', [UtamaController::class, 'D']);
Route::get('/A1', [UtamaController::class, 'A1']);
Route::get('/A2', [UtamaController::class, 'A2']);
Route::get('/A3', [UtamaController::class, 'A3']);
Route::get('/B1', [UtamaController::class, 'B1']);
Route::get('/B2', [UtamaController::class, 'B2']);
Route::get('/B3', [UtamaController::class, 'B3']);
Route::get('/C1', [UtamaController::class, 'C1']);
Route::get('/C2', [UtamaController::class, 'C2']);
Route::get('/C3', [UtamaController::class, 'C3']);
Route::get('/D1', [UtamaController::class, 'D1']);
Route::get('/D2', [UtamaController::class, 'D2']);
Route::get('/D3', [UtamaController::class, 'D3']);
