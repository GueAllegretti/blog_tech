<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\ConsoleController;

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

//rotta pubblica
Route::get('/', [PublicController::class, 'index'])->name('index');

//rotte articoli
Route::get('/article/create', [ArticleController::class, 'create'])->name('article.create');
Route::post('article/store', [ArticleController::class, 'store'])->name('article.store');
Route::get('/article/index', [ArticleController::class, 'index'])->name('article.index');

//rotte console
Route::get('/console/create', [ConsoleController::class, 'create'])->name('console.create');
Route::post('/console/store', [ConsoleController::class, 'store'])->name('console.store');
Route::get('/console/index', [ConsoleController::class, 'index'])->name('console.index');
Route::get('/console/show/{console}', [ConsoleController::class, 'show'])->name('console.show');

