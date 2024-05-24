<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CommissionController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/commission', [CommissionController::class, 'index'])->name('commission.index');
Route::get('/commission/create', [CommissionController::class, 'create'])->name('commission.create');
Route::post('/commission', [CommissionController::class, 'store'])->name('commission.store');
Route::get('/commission/{id}/edit', [CommissionController::class, 'edit'])->name('commission.edit');
Route::put('/commission/{id}', [CommissionController::class, 'update'])->name('commission.update');
Route::delete('/commission/{id}', [CommissionController::class, 'destroy'])->name('commission.destroy');

?>
