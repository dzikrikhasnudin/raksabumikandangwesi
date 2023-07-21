<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\AlbumController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProgramController;
use App\Http\Livewire\IndexAlbum;
use App\Http\Livewire\IndexPages;
use App\Http\Livewire\IndexPosts;
use App\Http\Livewire\IndexPrograms;
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

require __DIR__ . '/admin.php';

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
