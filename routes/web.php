<?php

use App\Http\Controllers\CurriculumController;
use App\Http\Controllers\PdfController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// ruta del pdf
Route::get('/generate-pdf/{id}', [PdfController::class, "generatePdf"])->name("vistaPDF");

// 
Route::post('/form', [CurriculumController::class, 'store'])->name('partials.form.submit');
Route::get('/form', [CurriculumController::class, "create"])->name("partials.form");
Route::get('/list', [CurriculumController::class, 'index'])->name('list'); // Mostrar todos los registros
Route::get('/{id}/edit', [CurriculumController::class, 'edit'])->name('edit'); // Mostrar formulario para editar
Route::put('/{id}', [CurriculumController::class, 'update'])->name('update'); // Actualizar un registro
Route::delete('/{id}', [CurriculumController::class, 'destroy'])->name('destroy'); // Eliminar un registro

require __DIR__.'/auth.php';
