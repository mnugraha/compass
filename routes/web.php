<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UtamaController;
use App\Http\Controllers\EnglishController;
use App\Http\Controllers\BackendController;
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
Route::get('/user', [BackendController::class, 'user']);
Route::post('/userSimpan', [BackendController::class, 'userSimpan']);
Route::post('/userUpdate/{x}', [BackendController::class, 'userUpdate']);
Route::post('/userUpdatePass/{x}', [BackendController::class, 'updatePass']);
Route::post('/userDelete/{x}', [BackendController::class, 'userDelete']);
Route::get('/Dkompetensi', [BackendController::class, 'kompetensi']);
Route::post('/kompetensiSimpan', [BackendController::class, 'kompetensiSimpan']);
Route::post('/kompetensiUpdate/{x}', [BackendController::class, 'kompetensiUpdate']);
Route::post('/kompetensiDelete/{x}', [BackendController::class, 'kompetensiDelete']);
Route::get('/Dlevel', [BackendController::class, 'level']);
Route::post('/levelSimpan', [BackendController::class, 'levelSimpan']);
Route::post('/levelUpdate/{x}', [BackendController::class, 'levelUpdate']);
Route::post('/levelDelete/{x}', [BackendController::class, 'levelDelete']);
Route::get('/Dvalue', [BackendController::class, 'value']);
Route::post('/valueSimpan', [BackendController::class, 'valueSimpan']);
Route::post('/valueUpdate/{x}', [BackendController::class, 'valueUpdate']);
Route::post('/valueDelete/{x}', [BackendController::class, 'valueDelete']);
Route::get('/Dperan', [BackendController::class, 'peran']);
Route::post('/peranSimpan', [BackendController::class, 'peranSimpan']);
Route::post('/peranUpdate/{x}', [BackendController::class, 'peranUpdate']);
Route::post('/peranDelete/{x}', [BackendController::class, 'peranDelete']);
Route::get('/Dstruktur', [BackendController::class, 'struktur']);
Route::post('/strukturSimpan', [BackendController::class, 'strukturSimpan']);
Route::post('/strukturUpdate/{x}', [BackendController::class, 'strukturUpdate']);
Route::post('/strukturDelete/{x}', [BackendController::class, 'strukturDelete']);

Route::get('/master', [UtamaController::class, 'index']);
Route::get('/', [UtamaController::class, 'dashboard']);
Route::get('/contoh', [UtamaController::class, 'contoh']);
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
Route::get('/test', [UtamaController::class, 'underConstruction']);
Route::get('/book', [UtamaController::class, 'handbook']);
Route::get('/video', [UtamaController::class, 'video']);
Route::get('/kompetensi', [UtamaController::class, 'kompetensi']);
Route::post('/userUpdatePass1/{x}', [UtamaController::class, 'updatePass']);
Route::get('/faq', [UtamaController::class, 'faq']);

Route::get('/profile-en', [EnglishController::class, 'profil_en']);
Route::get('/en', [EnglishController::class, 'dashboard_en']);
Route::get('/A_en', [EnglishController::class, 'A_en']);
Route::get('/B_en', [EnglishController::class, 'B_en']);
Route::get('/C_en', [EnglishController::class, 'C_en']);
Route::get('/D_en', [EnglishController::class, 'D_en']);
Route::get('/A1_en', [EnglishController::class, 'A1_en']);
Route::get('/A2_en', [EnglishController::class, 'A2_en']);
Route::get('/A3_en', [EnglishController::class, 'A3_en']);
Route::get('/B1_en', [EnglishController::class, 'B1_en']);
Route::get('/B2_en', [EnglishController::class, 'B2_en']);
Route::get('/B3_en', [EnglishController::class, 'B3_en']);
Route::get('/C1_en', [EnglishController::class, 'C1_en']);
Route::get('/C2_en', [EnglishController::class, 'C2_en']);
Route::get('/C3_en', [EnglishController::class, 'C3_en']);
Route::get('/D1_en', [EnglishController::class, 'D1_en']);
Route::get('/D2_en', [EnglishController::class, 'D2_en']);
Route::get('/D3_en', [EnglishController::class, 'D3_en']);
Route::get('/book_en', [EnglishController::class, 'handbook']);
Route::get('/video_en', [EnglishController::class, 'video']);
Route::get('/kompetensi_en', [EnglishController::class, 'kompetensi_en']);
Route::post('/userUpdatePass1_en/{x}', [EnglishController::class, 'updatePass']);
Route::get('/faq_en', [EnglishController::class, 'faq']);
