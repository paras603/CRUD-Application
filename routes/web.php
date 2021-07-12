<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookStoreController;
use App\Models\Book;

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

Route::POST('/addBook', [BookStoreController::class, 'store']);

Route::get('/viewBooks', [BookStoreController::class, 'show']);

Route::get('/edit/{id}', [BookStoreController::class, 'edit']);

Route::post('/updateBook/{id}', [BookStoreController::class, 'update']);

Route::get('/deleteBook/{id}', [BookStoreController::class, 'destroy']);



