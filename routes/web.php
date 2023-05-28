<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CartaController;
use App\Http\Controllers\GrupoController;
use App\Http\Controllers\PersonajeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
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
    return view('index');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

/************* Guest *************/
        /**** Cartas ****/
Route::get('/cartas', [CartaController::class, 'index'])->name('pages.cartas');
Route::post('/cartas/buscar', [CartaController::class, 'buscar'])->name('pages.cartas.buscar');
        /**** Grupo ****/
Route::get('/grupos', [GrupoController::class, 'index'])->name('pages.grupos');
Route::post('/grupos/grupo', [GrupoController::class, 'show'])->name('pages.grupo');
        /**** Personaje ****/
Route::get('/personajes', [PersonajeController::class, 'index'])->name('pages.personajes');
Route::post('/personajes/personaje', [PersonajeController::class, 'show'])->name('pages.personaje');

/************* User *************/
Route::middleware('auth')->group(function () {
            /**** Cartas ****/
    Route::post('/cartas/add', [UserController::class, 'guardarCarta'])->name('pages.cartas.add');
    Route::post('/cartas/delete', [UserController::class, 'eliminarCarta'])->name('pages.cartas.delete');
            /**** Comunidad ****/
    Route::get('/comunidad', [PostController::class, 'index'])->name('pages.comunidad');
    Route::post('/comunidad/post', [PostController::class, 'store'])->name('pages.comunidad.post');
    Route::post('/comunidad/posts', [PostController::class, 'show'])->name('pages.posts');
    Route::delete('/comunidad/{post}/delete', [PostController::class, 'destroy'])->name('pages.comunidad.delete');
    Route::post('/comunidad/{post}/valorar', [UserController::class, 'valorarPost'])->name('pages.comunidad.valorar');
});

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
    /************* Users *************/
    Route::get('/users', [UserController::class, 'index'])->name('admin.users.index');
    Route::put('/users/{user}/validar', [UserController::class, 'validar'])->name('admin.users.validar');
    Route::put('/users/{user}/bloquear', [UserController::class, 'bloquear'])->name('admin.users.bloquear');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'index'])->name('profile.index');
    Route::get('/profile/edit', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
