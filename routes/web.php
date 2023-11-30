<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FilmsController;
use App\Http\Controllers\PersonnesController;
use App\Http\Controllers\UsagersController;

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


/* Section films */

Route::get('/', 
[FilmsController::class, 'index'])->name('films.index');

Route::get('/films/{film}', 
[FilmsController::class, 'show'])->name('film.show')->middleware('auth');

Route::get('/creation/films',
[FilmsController::class, 'create'])->name('films.create')->middleware('auth');

Route::post('/films',
[FilmsController::class, 'store'])->name('films.store')->middleware('auth');

Route::get('/films/{film}/modifier',
[FilmsController::class, 'edit'])->name('films.edit')->middleware('auth');

Route::patch('/films/{film}/modifier',
[FilmsController::class, 'update'])->name('films.update')->middleware('auth');

Route::delete('/films/{id}/modifier',
[FilmsController::class, 'destroy'])->name('films.destroy')->middleware('auth');

/* Section personnes */

Route::get('/personnes', 
[PersonnesController::class, 'index'])->name('personnes.index');

Route::get('/personnes/{personne}', 
[PersonnesController::class, 'show'])->name('personne.show')->middleware('auth');

Route::get('/creation/personnes',
[PersonnesController::class, 'create'])->name('personnes.create')->middleware('auth');

Route::post('/personnes',
[PersonnesController::class, 'store'])->name('personnes.store')->middleware('auth');

Route::get('/personnes/{personne}/modifier',
[PersonnesController::class, 'edit'])->name('personnes.edit')->middleware('auth');

Route::patch('/personnes/{personne}/modifier',
[PersonnesController::class, 'update'])->name('personnes.update')->middleware('auth');

Route::delete('/personnes/{id}/personnes',
[PersonnesController::class, 'destroy'])->name('personnes.destroy')->middleware('auth');


/* Section Lien entre personne et films */

Route::get('/lien',
[FilmsController::class, 'create_film_personne'])->name('films.create_film_personne')->middleware('auth');

Route::post('/filmPersonne',
[FilmsController::class, 'store_film_personne'])->name('films.store_film_personne')->middleware('auth');


/* Section usager */
Route::get('/login/index', 
[UsagersController::class, 'index'])->name('showLoginForm');

Route::get('/login', 
[UsagersController::class, 'login'])->name('login');

Route::get('/logout', 
[UsagersController::class, 'logout'])->name('logout')->middleware('auth');