<?php

use App\Http\Controllers\BasitController;
use App\Http\Controllers\BukuController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\ParallerProcessingController;
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


// Route::get('/', [BasitController::class, 'index']);
Route::get('/process-large-task', [ParallerProcessingController::class, 'processLargeTask']);
Route::resource('/buku', BukuController::class);
Route::resource('/', KategoriController::class);
Route::resource('/kategori', KategoriController::class);



