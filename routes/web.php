<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\Profilecontroller;
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

Route::prefix('admin')->group(function () {
    Route::get('pengaturan', [Profilecontroller::class, 'index'])->name('pengaturan.profile');
    Route::get('pengunjung', function () {
        return view('pengunjung');
    });
    
    // rak start
    Route::get('nomor-rak', [Profilecontroller::class, 'showrak'])->name('pengaturan.rak');
    Route::get('raktambah', [Profilecontroller::class, 'tambahrak'])->name('pengaturan.tambah');
    Route::post('rakstore', [Profilecontroller::class, 'tambahstore'])->name('pengaturan.tambahstore');
    Route::get('rakedit/{id}', [Profilecontroller::class, 'showrakedit'])->name('pengaturan.rakedit');
    Route::get('delete/{id}', [Profilecontroller::class, 'destroy'])->name('pengaturan.hapus');
    // rak end
    // subjek
    Route::get('subjek', [Profilecontroller::class, 'showsubjek'])->name('pengaturan.subjek');
    Route::get('subtambah', [Profilecontroller::class, 'tambahsub'])->name('pengaturan.tambahsub');
    Route::post('substore', [Profilecontroller::class, 'subjekstore'])->name('pengaturan.subjekstore');
    Route::get('deleteh/{id}', [Profilecontroller::class, 'destroysub'])->name('pengaturan.destroysub');



    Route::get('login', [Controller::class, 'login']);
    Route::post('loginstore', [Controller::class, 'store'])->name('login.store');
});