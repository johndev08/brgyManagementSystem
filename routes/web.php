<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ResidenceController;
use App\Models\Residence;

Route::get('/', [ResidenceController::class, "index"])->name('index');
Route::post('/store', [ResidenceController::class, 'store'])->name('store');
Route::get('/create', [ResidenceController::class, 'create'])->name('create');
Route::get('/show/{id}', [ResidenceController::class, 'show'])->name('show');
Route::get('/edit/{id}', [ResidenceController::class, 'edit'])->name('edit');
Route::put('/update/{id}', [ResidenceController::class, "update"])->name('update');
Route::delete('/destroy/{id}', [ResidenceController::class, 'destroy'])->name('delete');

