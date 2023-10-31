<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProyectoController;

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



Route::get('/', function () {
    return view('welcome');
});

Route::resource('proyectos', ProyectoController::class);
Route::get('/proyectos/{proyecto}/edit', [ProyectoController::class, 'edit'])->name('proyectos.edit');
Route::put('/proyectos/{proyecto}', [ProyectoController::class, 'update'])->name('proyectos.update');
Route::get('/proyectos/download-pdf', [ProyectoController::class, 'generatePDF'])->name('proyectos.pdf');
Route::get('informes', [ProyectoController::class, 'informe'])->name('informes');

Route::get('/proyectos/{proyecto}/download-pdf', [ProyectoController::class, 'downloadPDF'])->name('proyectos.downloadPDF');









