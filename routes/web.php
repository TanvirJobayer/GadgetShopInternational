<?php

use App\Http\Controllers\GadgetController;
use Illuminate\Support\Facades\Route;

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/', [GadgetController::class, 'index'])->name('gadgets.index');
Route::get('/create', [GadgetController::class, 'create'])->name('gadgets.create');
Route::post('/', [GadgetController::class, 'store'])->name('gadgets.store');
Route::get('/{id}', [GadgetController::class, 'show'])->name('gadgets.show');
Route::get('/{id}/edit', [GadgetController::class, 'edit'])->name('gadgets.edit');
Route::put('/{id}', [GadgetController::class, 'update'])->name('gadgets.update');
Route::delete('/{id}', [GadgetController::class, 'destroy'])->name('gadgets.delete');
