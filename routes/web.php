<?php

use TCG\Voyager\Facades\Voyager;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AppController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\RealisationController;
use App\Http\Controllers\SimpleQRcodeController;

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

// APP
Route::get('/', [AppController::class, 'index'])->name('app.index');
Route::get('/acquisition-de-trafic', [AppController::class, 'strategy'])->name('app.strategy');
Route::get('/social-media', [AppController::class, 'social'])->name('app.social');
Route::get('/identité-visuelle', [AppController::class, 'identite'])->name('app.identite');
Route::get('/sites-web', [AppController::class, 'development'])->name('app.development');
Route::get('/feeds', [AppController::class, 'feeds']);
Route::get('/mentions-legales', [AppController::class, 'legacy'])->name('app.legacy');

//BLOG
Route::get('/blog', [BlogController::class, 'index'])->name('blog.index');
Route::get('/blog/{slug}', [BlogController::class, 'show'])->name('blog.show');

//REALISATIONS
Route::get('/realisations', [RealisationController::class, 'index'])->name('realisation.index');
Route::get('/realisations/{slug}', [RealisationController::class, 'show'])->name('realisation.show');

// CONTACT
Route::post('/contact', [ContactController::class, 'index'])->name('contact');
Route::get('/contact', [ContactController::class, 'show'])->name('contact.show');
Route::post('/contact-send', [ContactController::class, 'send'])->name('contact.send');
Route::get('/reload-captcha', [ContactController::class, 'reloadCaptcha']);

//VOYAGER
Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

//QRCODE
Route::get("simple-qrcode", [SimpleQRcodeController::class, 'generate']);

Route::fallback(function() {
    return view('404'); // la vue 404.blade.php
 });

