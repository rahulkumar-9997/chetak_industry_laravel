<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\FrontHomeController;

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

Route::get('/', [FrontHomeController::class, 'home'])->name('home');
Route::get('/about-us', [FrontHomeController::class, 'aboutUs'])->name('about-us');
Route::get('/contact-us', [FrontHomeController::class, 'contactUs'])->name('contact-us');
Route::get('/angle-boards-and-od-protectors', [FrontHomeController::class, 'angleBoardsAndOdProtectors'])->name('angle-boards-and-od-protectors');
Route::get('/interleaving-paper', [FrontHomeController::class, 'interLeavingPaper'])->name('interleaving-paper');
Route::get('/stretch-film', [FrontHomeController::class, 'stretchFilm'])->name('stretch-film');
Route::get('/masking-film', [FrontHomeController::class, 'maskingFilm'])->name('masking-film');
Route::get('/paper-surface-board', [FrontHomeController::class, 'paperSurfaceBoard'])->name('paper-surface-board');
Route::get('/pp-bubble-guard', [FrontHomeController::class, 'ppBubbleGuard'])->name('pp-bubble-guard');
Route::get('/mcr-sheet', [FrontHomeController::class, 'mcrSheet'])->name('mcr-sheet');
Route::post('contact-us.submit',[FrontHomeController::class, 'contactUsSubmit'])->name('contact-us.submit');
