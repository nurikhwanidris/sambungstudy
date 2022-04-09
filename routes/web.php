<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PermohonanController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UnitTatatertibController;
use App\Http\Controllers\BahagianKhidmatPengurusanController;
use App\Http\Controllers\JKKPLController;
use App\Http\Controllers\KetuaJabatanController;

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

// Halaman utama
Route::get('/', function () {
    return view('utama.index');
})->middleware('auth');

// User login and logout route
Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');

Route::post('/login', [LoginController::class, 'authenticate']);

Route::post('/logout', [LoginController::class, 'logout']);

// Permohonan baru
Route::resource('/permohonan', PermohonanController::class)->middleware('auth');

// Unit Tatatertib
Route::get('/utt/senaraipermohonan', [UnitTatatertibController::class,'index'])->middleware('auth');
Route::get('/utt/papar/{permohonan}', [UnitTatatertibController::class,'show'])->middleware('auth');
Route::post('/utt/simpan', [UnitTatatertibController::class,'save'])->middleware('auth');

// Bahagian Khidmat Pengurusan
Route::get('/bkp/senaraipermohonan', [BahagianKhidmatPengurusanController::class,'index'])->middleware('auth');
Route::get('/bkp/papar/{permohonan}', [BahagianKhidmatPengurusanController::class,'show'])->middleware('auth');
Route::post('/bkp/simpan', [BahagianKhidmatPengurusanController::class,'save'])->middleware('auth');

// Bahagian Khidmat Pengurusan
Route::get('/pub/senaraipermohonan', [KetuaJabatanController::class,'index'])->middleware('auth');
Route::get('/pub/papar/{permohonan}', [KetuaJabatanController::class,'show'])->middleware('auth');

// JKKPL
Route::get('/jkkpl/senaraipermohonan', [JKKPLController::class,'index'])->middleware('auth');
Route::get('/jkkpl/papar/{permohonan}', [JKKPLController::class,'show'])->middleware('auth');
