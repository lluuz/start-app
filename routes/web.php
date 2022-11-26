<?php

use App\Http\Controllers\BucketController;
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


require __DIR__.'/auth.php';
