<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PegawaiController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/pegawai/', [PegawaiController::class, 'index']);
Route::get('/pegawai/form/', [PegawaiController::class, 'create']);
Route::post('/pegawai/store/', [PegawaiController::class, 'store']);
Route::get('/pegawai/edit/{id}', [PegawaiController::class, 'edit']);
Route::put('/pegawai/{id}', [PegawaiController::class, 'update']);
Route::delete('/pegawai/{id}', [PegawaiController::class, 'destroy']);