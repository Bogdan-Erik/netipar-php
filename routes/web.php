<?php

use App\Http\Controllers\AppController;
use App\Http\Controllers\EmailController;
use App\Http\Controllers\TelephoneController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
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

/* Name routes */
Route::get('/', [AppController::class, 'index'])->name('names.index');

Route::group(['prefix' => 'names'], function () {
    Route::get('/create', [AppController::class, 'create'])->name('names.create');
    Route::get('/modify/{name}', [AppController::class, 'modify'])->name('names.modify');
    Route::post('/update/{name}', [AppController::class, 'update'])->name('names.update');
    Route::post('/store', [AppController::class, 'store'])->name('names.store');
    Route::get('/delete/{name}', [AppController::class, 'destroy'])->name('names.delete');
});


Route::group(['prefix' => 'emails'], function () {
    Route::get('/create/{name}', [EmailController::class, 'create'])->name('emails.create');
    Route::post('/store/{name}', [EmailController::class, 'store'])->name('emails.store');
    Route::get('/delete/{email}', [EmailController::class, 'destroy'])->name('emails.delete');
});

Route::group(['prefix' => 'telephones'], function () {
    Route::get('/create/{name}', [TelephoneController::class, 'create'])->name('telephones.create');
    Route::post('/store/{name}', [TelephoneController::class, 'store'])->name('telephones.store');
    Route::get('/delete/{telephone}', [TelephoneController::class, 'destroy'])->name('telephones.delete');
});
