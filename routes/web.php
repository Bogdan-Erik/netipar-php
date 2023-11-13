<?php

use App\Http\Controllers\AppController;
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
Route::get(
    '/',
    [AppController::class, 'index']
)->name('names.index');

Route::get(
    '/create-name',
    [AppController::class, 'create']
)->name('names.create');

Route::post(
    '/store-name',
    [AppController::class, 'store']
)->name('names.store');
