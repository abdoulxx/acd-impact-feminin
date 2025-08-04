<?php

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

use App\Http\Controllers\RencontreController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/rencontre-2026', [RencontreController::class, 'index'])->name('rencontre');
