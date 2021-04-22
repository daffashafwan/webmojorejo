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
        Route::get('/tambah-berita', [AdminController::class, 'tambahBerita'])->name('admin.berita.tambah');
    });
    
});
