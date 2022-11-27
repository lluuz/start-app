<?php

use App\Http\Controllers\BucketController;
use App\Http\Controllers\BucketFileController;
use App\Http\Controllers\LocationController;
use App\Http\Controllers\ProfileController;
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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::get('/getApiData', [LocationController::class, 'getApiData'])->middleware(['auth', 'verified']);

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware(['auth', 'verified'])->controller(BucketController::class)->group(function () {
    Route::get('/buckets', 'index');
    Route::get('/buckets/create', 'create');
    Route::post('/bucket', 'store');
    Route::get('/buckets/{id}', 'show');
    Route::get('/buckets/{id}/edit', 'edit');
    Route::patch('/buckets/{id}/', 'update');
    Route::delete('/buckets/{id}/', 'destroy');
});

Route::middleware(['auth', 'verified'])->controller(BucketFileController::class)->group(function () {
    Route::get('/buckets/{id}/files', 'index');
    Route::get('/buckets/{id}/files/create', 'create');
    Route::post('/buckets/{id}/files', 'store');
    Route::get('/buckets/{id}/files/{file_id}', 'show');
    Route::get('/buckets/{id}/files/{file_id}/edit', 'edit');
    Route::patch('/buckets/{id}/files/{file_id}', 'update');
    Route::delete('/buckets/{id}/files/{file_id}', 'destroy');
});


require __DIR__.'/auth.php';
