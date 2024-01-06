<?php

use App\Http\Controllers\FamousController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\InputRatingController;
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

// Route::get('/', [HomeController::class, 'index'])->name('home.index');
// Route::get('/famous', [FamousController::class, 'index'])->name('famous.index');
// Route::get('/rating', [InputRatingController::class, 'index'])->name('inputrating.index');
// Route::get('/submit-rating', [InputRatingController::class, 'submitRating'])->name('submitRating');
// Route::get('/get-books-by-author/{author_id}', [InputRatingController::class, 'getBooksByAuthor']);

Route::get('/', [HomeController::class, 'index'])->name('home.index');
Route::get('/famous', [FamousController::class, 'index'])->name('famous.index');
Route::get('/rating', [InputRatingController::class, 'index'])->name('inputrating.index');
Route::get('/submit-rating', [InputRatingController::class, 'submitRating'])->name('submitRating');
Route::get('/get-books-by-author/{author_id}', [InputRatingController::class, 'getBooksByAuthor']);
