<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/tamu',[\App\Http\Controllers\TamusController::class,'index']);
Route::get('/mahasiswa',[\App\Http\Controllers\MahasiswasController::class,'index']);
Route::get('/storage',[\App\Http\Controllers\StorageController::class,'index']);


