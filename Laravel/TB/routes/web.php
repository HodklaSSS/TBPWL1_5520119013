<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])
        ->name('dashboard')
        ->middleware('auth');

        Route::get('/admin_dashboard', [App\Http\Controllers\AdminController::class, 'index'])
        ->name('admin.dashboard')
        ->middleware('is_admin');


        // Page Users

        Route::get('Admin/Users', [App\Http\Controllers\UserController::class, 'users'])
        ->name('admin.Users')
        ->middleware('is_admin');

        Route::get('Admin/Users/tambah', [App\Http\Controllers\UserController::class, 'tbuser'])
        ->name('user.tambah')
        ->middleware('is_admin');

        Route::post('Admin/Users/tambah', [App\Http\Controllers\UserController::class, 'insertUser'])
        ->name('insert.user')
        ->middleware('is_admin');

        Route::delete('Admin/Users/hapus', [App\Http\Controllers\UserController::class, 'hpsuser'])
        ->name('user.hapus')
        ->middleware('is_admin');



        // End Page Users

        // Page Barang

        Route::get('Admin/Kelola_Barang', [App\Http\Controllers\KelolaBarangController::class, 'index'])
        ->name('admin.barang')
        ->middleware('is_admin');

        Route::get('Admin/Kelola_Barang/Tambah', [App\Http\Controllers\KelolaBarangController::class, 'tbbarang'])
        ->name('admin.barang.tambah')
        ->middleware('is_admin');

        Route::post('Admin/Kelola_Barang/Tambah', [App\Http\Controllers\KelolaBarangController::class, 'insertBarang'])
        ->name('insert.barang')
        ->middleware('is_admin');

        Route::delete('Admin/Kelola_Barang/hapus', [App\Http\Controllers\KelolaBarangController::class, 'hpsbarang'])
        ->name('barang.hapus')
        ->middleware('is_admin');

        // End Page Barang

        // Page Kategori
        Route::get('Admin/Kelola_Kategori', [App\Http\Controllers\KategoriBarangController::class, 'index'])
        ->name('admin.kategori')
        ->middleware('is_admin');

        Route::get('Admin/Kelola_Kategori/Tambah', [App\Http\Controllers\KategoriBarangController::class, 'tbkategori'])
        ->name('admin.kategori.tambah')
        ->middleware('is_admin');

        Route::post('Admin/Kelola_Kategori/Tambah', [App\Http\Controllers\KategoriBarangController::class, 'insertKategori'])
        ->name('insert.kategori')
        ->middleware('is_admin');

        Route::delete('Admin/Kelola_Kategori/hapus', [App\Http\Controllers\KategoriBarangController::class, 'hpscategory'])
        ->name('kategori.hapus')
        ->middleware('is_admin');

        // End Page Kategori 
        Route::get('Admin/merk', [App\Http\Controllers\HomeController::class, 'index'])
        ->name('admin.merk')
        ->middleware('is_admin');
