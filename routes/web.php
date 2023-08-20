<?php


use App\Http\Controllers\MenuController;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

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

require __DIR__ . '/admin.php';

Route::get('kontak', [ContactController::class, 'create'])->name('contact.create');
Route::post('kontak', [ContactController::class, 'store'])->name('contact.store');
Route::get('kontak/sukses', [ContactController::class, 'success'])->name('contact.success');

Route::controller(MenuController::class)->group(function () {
    Route::get('/', 'home')->name('home');

    Route::get('profil/{slug}', 'profil')->name('profil');
    Route::get('program', 'program')->name('program');
    Route::get('artikel', 'postingan')->name('artikel');
    Route::get('ceramah', 'postingan')->name('ceramah');
    Route::get('tokoh', 'postingan')->name('tokoh');
    Route::get('berita', 'postingan')->name('berita');
    Route::get('galeri', 'galeri')->name('galeri');
    Route::get('{category}/{slug}', 'detail')->name('detail');
});
