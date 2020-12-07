<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Route::get('/home', [App\Http\Controllers\AnggotaController::class, 'index'])->name('home');

Route::get('/home/anggota/add', [App\Http\Controllers\AnggotaController::class, 'formAdd'])->name('home.anggota.add');
Route::post('/home/anggota/add', [App\Http\Controllers\AnggotaController::class, 'Add'])->name('home.anggota.add');

Route::get('/home/anggota/detail/{id}', [App\Http\Controllers\AnggotaController::class, 'Show'])->name('home.anggota.detail');

Route::get('/home/anggota/edit/{id}', [App\Http\Controllers\AnggotaController::class, 'formEdit'])->name('home.anggota.edit');
Route::patch('/home/anggota/edit/{id}', [App\Http\Controllers\AnggotaController::class, 'Edit'])->name('home.anggota.edit');

Route::delete('/home/anggota/delete/{id}', [App\Http\Controllers\AnggotaController::class, 'Delete'])->name('home.anggota.delete');


Route::get('/home/kegiatan', [App\Http\Controllers\KegiatanController::class, 'index'])->name('home.kegiatan');

Route::get('/home/kegiatan/add', [App\Http\Controllers\KegiatanController::class, 'formAdd'])->name('home.kegiatan.add');
Route::post('/home/kegiatan/add', [App\Http\Controllers\KegiatanController::class, 'Add'])->name('home.kegiatan.add');

Route::get('/home/kegiatan/detail/{id}', [App\Http\Controllers\KegiatanController::class, 'Show'])->name('home.kegiatan.detail');

Route::get('/home/kegiatan/edit/{id}', [App\Http\Controllers\KegiatanController::class, 'formEdit'])->name('home.kegiatan.edit');
Route::patch('/home/kegiatan/edit/{id}', [App\Http\Controllers\KegiatanController::class, 'Edit'])->name('home.kegiatan.edit');

Route::delete('/home/kegiatan/delete/{id}', [App\Http\Controllers\KegiatanController::class, 'Delete'])->name('home.kegiatan.delete');
