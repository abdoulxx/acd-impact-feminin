
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

use App\Http\Controllers\Rencontre2026Controller;
use App\Http\Controllers\InscriptionController;
use App\Http\Controllers\LanguageController;

Route::get('/', [Rencontre2026Controller::class, 'index'])->name('home');

Route::get('/rencontre-2026', [Rencontre2026Controller::class, 'index'])->name('rencontre-2026');
Route::post('/inscription', [InscriptionController::class, 'store'])->name('inscription.store');

// Routes pour le changement de langue
Route::get('/language/{locale}', [LanguageController::class, 'switchLanguage'])->name('language.switch');
