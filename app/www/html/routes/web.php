<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BukuController;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('/buku/index',[BukuController::class,'index'])->name('index.buku');
Route::get('/buku/create',[BukuController::class,'create'])->name('create.buku');
Route::get('/buku/edit',[BukuController::class,'edit'])->name('edit.buku');
Route::post('/buku/store',[BukuController::class,'store'])->name('store.buku');
Route::get('/buku/{id}/edit',[BukuController::class,'edit'])->name('edit.buku');
Route::put('/buku/{id}/update',[BukuController::class,'update'])->name('update.buku');
Route::delete('/buku/{id}/delete', [BukuController::class, 'destroy'])->name('destroy.buku');



