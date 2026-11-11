
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlatController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/alats', [AlatController::class, 'index'])->name('alats.index');
Route::get('/alats/create', [AlatController::class, 'create'])->name('alats.create');
Route::post('/alats', [AlatController::class, 'store'])->name('alats.store');
Route::get('/alats/{id}/edit', [AlatController::class, 'edit'])->name('alats.edit');
Route::put('/alats/{id}', [AlatController::class, 'update'])->name('alats.update');
