<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Route::get('', [AdminMovieController::class, 'index'])->name('movies.index');
// Route::get('/create', [AdminMovieController::class, 'create'])->name('movies.create');
// Route::post('/store', [AdminMovieController::class, 'store'])->name('movies.store');
// Route::get('/edit/{id}', [AdminMovieController::class, 'edit'])->name('movies.edit');
// Route::put('/update/{id}', [AdminMovieController::class, 'update'])->name('movies.update');
// Route::delete('/destroy/{id}', [AdminMovieController::class, 'destroy'])->name('movies.destroy');
