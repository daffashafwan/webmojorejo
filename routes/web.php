<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontController as FrontController;
use App\Http\Controllers\Admin\AdminController as AdminController;
use App\Http\Controllers\ContactUsFormController;
use App\Http\Controllers\CurhatDesaController;

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
Route::get('post/{id}', [FrontController::class, 'lihatBerita'])->name('berita.lihat-berita2');

Route::post('/', [ContactUsFormController::class, 'ContactUsForm'])->name('index.contact.store');

Route::get('/kritikdansaran', [CurhatDesaController::class, 'index'])->name('c');
Route::get('/kritikdansaran', [CurhatDesaController::class, 'createCurhat']);
Route::post('/kritikdansaran', [CurhatDesaController::class, 'CurhatForm'])->name('curhatdesa.store');



//Route::get('/admin', [AuthController::class, 'showFormLogin'])->name('login');
// Route::get('/login', [AuthController::class, 'showFormLogin'])->name('login');
// Route::post('/login', [AuthController::class, 'login']);


Route::group(['prefix' => 'admin','middleware' => ['auth:sanctum', 'verified']], function() {
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
            Route::post('/post', [AdminController::class, 'postPerangkat'])->name('admin.perangkat.post');
            Route::post('/ubah-status-perangkat', [AdminController::class, 'ubahStatusPerangkat'])->name('admin.berita.ubah-status-perangkat');
            Route::delete('/delete-perangkat/{id}', [AdminController::class, 'hapusPerangkat'])->name('admin.perangkat.hapus');
            Route::prefix('kelola')->group(function(){
                Route::get('/', [AdminController::class, 'kelola'])->name('admin.perangkat.kelola');
                Route::post('/post', [AdminController::class, 'postKelola'])->name('admin.perangkat.kelola.post');
                Route::delete('/delete-jabatan/{id}', [AdminController::class, 'hapusJabatan'])->name('admin.perangkat.jabatan.hapus');
                Route::delete('/delete-masa-jabatan/{id}', [AdminController::class, 'hapusMasaJabatan'])->name('admin.perangkat.masa.jabatan.hapus');
            });
        });
        Route::prefix('galeri')->group(function(){
            Route::get('/', [AdminController::class, 'galeri'])->name('admin.galeri.index');
            Route::post('/ubah-status-gambar', [AdminController::class, 'ubahStatusGambar'])->name('admin.galeri.ubah-status-gambar');
            Route::delete('/delete-gambar/{id}', [AdminController::class, 'hapusGambar'])->name('admin.galeri.delete-gambar');
            Route::prefix('tambah')->group(function(){
                Route::get('/', [AdminController::class, 'tambahGaleri'])->name('admin.galeri.tambah');
                Route::post('/store', [AdminController::class, 'storeGambar'])->name('admin.galeri.tambah.store'); 
            });
        });
});


Route::any('/ckfinder/connector', '\CKSource\CKFinderBridge\Controller\CKFinderController@requestAction')
    ->name('ckfinder_connector');

Route::any('/ckfinder/browser', '\CKSource\CKFinderBridge\Controller\CKFinderController@browserAction')
    ->name('ckfinder_browser');

