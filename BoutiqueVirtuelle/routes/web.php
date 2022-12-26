<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticlesController;

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

Route::get('/', [ArticlesController::class, 'index'])->name('index');

Route::get('/edit/{article}', [ArticlesController::class, 'edit'])->name('edit');

Route::get('/show/{article}', [ArticlesController::class, 'show'])->name('show');

Route::get('/update', [ArticlesController::class, 'update'])->name('update');

Route::get('/create', [ArticlesController::class, 'create'])->name('create');

Route::delete('/delete/{article}', [ArticlesController::class, 'destroy'])->name('delete');

Route::post('/storing', [ArticlesController::class, 'store'])->name('store');