<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\MovieController;

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

Route::prefix("movies")->group(function () {
    Route::get('', [MovieController::class, 'index'])->name('movies.index');
    Route::get('/show/{movie_id}', [MovieController::class, 'show'])->name('movies.show');
    Route::get('/create', [MovieController::class, 'create'])->name('movies.create');
    Route::get('/edit/{movie_id}', [MovieController::class, 'edit'])->name('movies.edit');
    Route::get('/delete/{movie_id}', [MovieController::class, 'deleteMovie'])->name('movies.delete');
    Route::post('/store', [MovieController::class, 'store'])->name('movies.store');
});

// Route::group(['prefix' => '/admin', 'as' => 'admin.'], function () {
//     Route::group(['prefix' => '/movies', 'as' => 'movies.'], function () {
//         require __DIR__ . '/api/movie.php';
//     });
// });
