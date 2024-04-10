<?php

use App\Http\Controllers\DetailController;
use App\Http\Controllers\PublicController;
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
// rotte public
Route::get('/', [PublicController::class , 'welcome'] )->name('welcome');
Route::get('/contatti', [PublicController::class , 'contatti'] )->name('contatti');
Route::post('/contatti/submit', [PublicController::class , 'contattiSubmit'] )->name('contatti.submit');


// rotte servizi
Route::get('/servizi', [DetailController::class , 'servizi'] )->name('servizi');
Route::get('/show{id}', [DetailController::class , 'show'] )->name('show');
