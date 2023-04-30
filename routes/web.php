<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CartaController;
use App\Http\Controllers\GrupoController;
use App\Http\Controllers\PersonajeController;
use Illuminate\Support\Facades\Route;

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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

/************* Admin *************/
Route::prefix('admin')->middleware(['auth', 'admin'])->group(function () {
    Route::get('/', [AdminController::class, 'index'])->name('admin.index');
    /************* Grupos *************/
    Route::get('/grupos', [GrupoController::class, 'index'])->name('admin.grupos.index');
    Route::get('/grupos/create', [GrupoController::class, 'create'])->name('admin.grupos.create');
    Route::post('/grupos/create', [GrupoController::class, 'store'])->name('admin.grupos.store');
    Route::get('/grupos/{grupo}/edit', [GrupoController::class, 'edit'])->name('admin.grupos.edit');
    Route::put('/grupos/{grupo}/edit', [GrupoController::class, 'update'])->name('admin.grupos.update');
    Route::delete('/grupos/{grupo}/delete', [GrupoController::class, 'destroy'])->name('admin.grupos.destroy');
    /************* Personajes *************/
    Route::get('/personajes', [PersonajeController::class, 'index'])->name('admin.personajes.index');
    Route::get('/personajes/create', [PersonajeController::class, 'create'])->name('admin.personajes.create');
    Route::post('/personajes/create', [PersonajeController::class, 'store'])->name('admin.personajes.store');
    Route::get('/personajes/{personaje}/edit', [PersonajeController::class, 'edit'])->name('admin.personajes.edit');
    Route::put('/personajes/{personaje}/edit', [PersonajeController::class, 'update'])->name('admin.personajes.update');
    Route::delete('/personajes/{personaje}/delete', [PersonajeController::class, 'destroy'])->name('admin.personajes.destroy');
    /************* Cartas *************/
    Route::get('/cartas', [CartaController::class, 'index'])->name('admin.cartas.index');
    Route::get('/cartas/create', [CartaController::class, 'create'])->name('admin.cartas.create');
    Route::post('/cartas/create', [CartaController::class, 'store'])->name('admin.cartas.store');
    Route::get('/cartas/{carta}/edit', [CartaController::class, 'edit'])->name('admin.cartas.edit');
    Route::put('/cartas/{carta}/edit', [CartaController::class, 'update'])->name('admin.cartas.update');
    Route::delete('/cartas/{carta}/delete', [CartaController::class, 'destroy'])->name('admin.cartas.destroy');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
