<?php

use App\Http\Controllers\AlbumController;
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
| Admin Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::group(['prefix' => 'laravel-filemanager', 'middleware' => ['web', 'auth']], function () {
        \UniSharp\LaravelFilemanager\Lfm::routes();
    });


    // Route Postingan
    Route::prefix('postingan')->name('post.')->group(function () {
        Route::get('/', IndexPosts::class)->name('index');
        Route::controller(PostController::class)->group(function () {
            Route::get('/tambah', 'create')->name('create');
            Route::post('/', 'store')->name('store');
            Route::get('/edit/{post}', 'edit')->name('edit');
            Route::put('/{post}', 'update')->name('update');
            Route::delete('/{post}', 'destroy')->name('destroy');
        });
    });

    // Route Halaman
    Route::prefix('halaman')->name('page.')->group(function () {
        Route::get('/', IndexPages::class)->name('index');
        Route::controller(PageController::class)->group(function () {
            Route::get('/tambah', 'create')->name('create');
            Route::post('/', 'store')->name('store');
            Route::get('/edit/{page}', 'edit')->name('edit');
            Route::put('/{page}', 'update')->name('update');
            Route::delete('/{page}', 'destroy')->name('destroy');
        });
    });

    // Route Program
    Route::prefix('program')->name('program.')->group(function () {
        Route::get('/', IndexPrograms::class)->name('index');
        Route::controller(ProgramController::class)->group(function () {
            Route::get('/tambah', 'create')->name('create');
            Route::post('/', 'store')->name('store');
            Route::get('/edit/{program}', 'edit')->name('edit');
            Route::put('/{program}', 'update')->name('update');
            Route::delete('/{program}', 'destroy')->name('destroy');
        });
    });

    Route::prefix('album')->name('album.')->group(function () {
        Route::get('/', IndexAlbum::class)->name('index');
        Route::controller(AlbumController::class)->group(function () {
            Route::get('/{album}', 'show')->name('show');
            Route::post('/', 'store')->name('store');
            Route::get('/edit/{album}', 'edit')->name('edit');
            Route::put('/{album}', 'update')->name('update');
            Route::delete('/{album}', 'destroy')->name('destroy');
            Route::post('/tambah-gambar', 'addImage')->name('add-image');
            Route::delete('/hapus-gambar/{id}', 'destroyImage')->name('destroy-image');
        });
    });


    Route::get('{category}/{slug}', [PostController::class, 'show'])->name('detail.post');
});
