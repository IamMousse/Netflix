<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FilmsController;
use App\Http\Controllers\PersonnesController;

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

Route::get('/', 
[FilmsController::class, 'index'])->name('films.index');

Route::get('/films/{film}', 
[FilmsController::class, 'show'])->name('film.show');

Route::get('/creation/films',
[FilmsController::class, 'create'])->name('films.create');

Route::post('/films',
[FilmsController::class, 'store'])->name('films.store');

Route::get('/personnes', 
[PersonnesController::class, 'index'])->name('personnes.index');

Route::get('/personnes/{personne}', 
[PersonnesController::class, 'show'])->name('personne.show');

Route::get('/creation/personnes',
[PersonnesController::class, 'create'])->name('personnes.create');

Route::post('/personnes',
[PersonnesController::class, 'store'])->name('personnes.store');