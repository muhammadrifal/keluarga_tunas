<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormKeluargaTunasController;

Route::get('/', [FormKeluargaTunasController::class, 'home'])->name('home');
Route::get('/agen_tunas', [FormKeluargaTunasController::class, 'index'])->name('agen_tunas');
Route::get('/getRegencies/{provinceId}', [FormKeluargaTunasController::class, 'regencies'])->name('regencies');
// Route::post('/store', [FormKeluargaTunasController::class, 'store'])->name('store');
Route::post('/store', [FormKeluargaTunasController::class, 'store'])->name('store')->middleware('throttle:5,10');