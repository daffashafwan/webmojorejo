<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontController as FrontController;
use App\Http\Controllers\Admin\AdminController as AdminController;

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

Route::get('/', [FrontController::class, 'index'])->name('index');

Route::prefix('admin')->group(function(){
    Route::get('/', [AdminController::class, 'index'])->name('admin.index');
    Route::prefix('berita')->group(function(){
        Route::get('/', [AdminController::class, 'berita'])->name('admin.berita.index');
        Route::prefix('tambah-berita')->group(function(){
            Route::get('/', [AdminController::class, 'tambahBerita'])->name('admin.berita.tambah');
            Route::post('/store', [AdminController::class, 'store'])->name('admin.berita.tambah.store');
        });
        Route::get('lihat-berita/{id}', [AdminController::class, 'lihatBerita'])->name('admin.berita.lihat-berita');
        Route::prefix('edit/{id}')->group(function(){
            Route::get('/', [AdminController::class, 'editBerita'])->name('admin.berita.edit');
            Route::post('/post', [AdminController::class, 'editBeritaPost'])->name('admin.berita.edit.post');
        });
        Route::post('/ubah-status', [AdminController::class, 'ubahStatusBerita'])->name('admin.berita.ubah-status');
        Route::delete('delete/{id}', [AdminController::class, 'hapusBerita'])->name('admin.berita.hapus');
    });
    Route::prefix('perangkat')->group(function(){
        Route::get('/', [AdminController::class, 'perangkat'])->name('admin.perangkat.index');
        Route::get('kelola', [AdminController::class, 'kelola'])->name('admin.perangkat.kelola');
    });
    
});

Route::any('/ckfinder/connector', '\CKSource\CKFinderBridge\Controller\CKFinderController@requestAction')
    ->name('ckfinder_connector');

Route::any('/ckfinder/browser', '\CKSource\CKFinderBridge\Controller\CKFinderController@browserAction')
    ->name('ckfinder_browser');
