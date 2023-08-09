<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostulateController;
use App\Http\Livewire\Edit;
use App\Http\Livewire\Show;


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

Route::get('/index/{postulateId?}', [PostulateController::class, 'index'])->name('postulate.index');
Route::get('/create/{postulateId?}', [PostulateController::class, 'create'])->name('postulate.create');
Route::get('/export', [PostulateController::class, 'export'])->name('export');