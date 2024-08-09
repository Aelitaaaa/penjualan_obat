<?php

use App\Http\Controllers\ObatController;

Route::get('/obats', [ObatController::class, 'index'])->name('obats.index');
Route::get('/obats/create', [ObatController::class, 'create'])->name('obats.create');
Route::post('/obats', [ObatController::class, 'store'])->name('obats.store');
Route::get('/obats/{id}', [ObatController::class, 'show'])->name('obats.show');
Route::get('/obats/{id}/edit', [ObatController::class, 'edit'])->name('obats.edit');
Route::put('/obats/{id}', [ObatController::class, 'update'])->name('obats.update');
Route::delete('/obats/{id}', [ObatController::class, 'destroy'])->name('obats.destroy');
