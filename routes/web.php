<?php

use App\Http\Controllers\PostController;
use App\Http\Livewire\IndexPosts;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/admin/dashboard', function () {
    return view('admin.dashboard');
});

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

    Route::get('postingan', IndexPosts::class)->name('post.index');
    Route::get('postingan/tambah', [PostController::class, 'create'])->name('post.create');
    Route::post('postingan', [PostController::class, 'store'])->name('post.store');
    Route::get('postingan/edit/{post}', [PostController::class, 'edit'])->name('post.edit');
    Route::put('postingan/{post}', [PostController::class, 'update'])->name('post.update');
    Route::delete('postingan/{post}', [PostController::class, 'destroy'])->name('post.destroy');
    Route::get('{category}/{slug}', [PostController::class, 'show'])->name('detail.post');
});
