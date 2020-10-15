<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/medecin/add', [App\Http\Controllers\MedecinController::class, 'add'])->name('addmedecin');
Route::get('/medecin/edit/{id}', [App\Http\Controllers\MedecinController::class, 'edit'])->name('editmedecin');
Route::post('/medecin/update', [App\Http\Controllers\MedecinController::class, 'update'])->name('updatemedecin');
Route::get('/medecin/delete/{id}', [App\Http\Controllers\MedecinController::class, 'delete'])->name('deletemedecin');
Route::get('/medecin/getAll', [App\Http\Controllers\MedecinController::class, 'getAll'])->name('getallmedecin');
Route::post('/medecin/persist', [App\Http\Controllers\MedecinController::class, 'persist'])->name('persistmedecin');



Route::get('/rendezvous/add', [App\Http\Controllers\RendezvousController::class, 'add'])->name('addrendezvous');
Route::get('/rendezvous/edit/{id}', [App\Http\Controllers\RendezvousController::class, 'edit'])->name('editrendezvous');
Route::post('/rendezvous/update', [App\Http\Controllers\RendezvousController::class, 'update'])->name('updaterendezvous');
Route::get('/rendezvous/delete/{id}', [App\Http\Controllers\RendezvousController::class, 'delete'])->name('deleterendezvous');
Route::get('/rendezvous/getAll', [App\Http\Controllers\RendezvousController::class, 'getAll'])->name('getallrendezvous');
Route::post('/rendezvous/persist', [App\Http\Controllers\RendezvousController::class, 'persist'])->name('persistrendezvous');
