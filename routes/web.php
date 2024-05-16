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
    Route::post('rakeditstore/{id}', [Profilecontroller::class, 'showrakeditstore'])->name('pengaturan.rakeditstore');
    Route::get('delete/{id}', [Profilecontroller::class, 'destroy'])->name('pengaturan.hapus');
    // rak end
    // subjek
    Route::get('subjek', [Profilecontroller::class, 'showsubjek'])->name('pengaturan.subjek');
    Route::get('subtambah', [Profilecontroller::class, 'tambahsub'])->name('pengaturan.tambahsub');
    Route::post('substore', [Profilecontroller::class, 'subjekstore'])->name('pengaturan.subjekstore');
    Route::get('subedit/{id}', [Profilecontroller::class, 'subjekedit'])->name('pengaturan.subjekedit');
    Route::post('subedit/store/{id}', [Profilecontroller::class, 'subjekeditstore'])->name('pengaturan.subjekeditstore');
    Route::get('deleteh/{id}', [Profilecontroller::class, 'destroysub'])->name('pengaturan.destroysub');

    // karya
    Route::get('bentukkarya', [Profilecontroller::class, 'showkarya'])->name('pengaturan.karya');
    Route::get('karyatambah', [Profilecontroller::class, 'tambahkarya'])->name('pengaturan.tambahkarya');
    Route::post('karyastore', [Profilecontroller::class, 'karyastore'])->name('pengaturan.karyastore');
    Route::get('karyaedit/{id}', [Profilecontroller::class, 'karyaedit'])->name('pengaturan.karyaedit');
    Route::post('karya/store/{id}', [Profilecontroller::class, 'karyaeditstore'])->name('pengaturan.karyaeditstore');
    Route::get('deletekarya/{id}', [Profilecontroller::class, 'destroykarya'])->name('pengaturan.destroykarya');

    //matpel
    Route::get('matapelajaran', [Profilecontroller::class, 'showmatpel'])->name('pengaturan.matpel');
    Route::get('tambahmatpel', [Profilecontroller::class, 'tambahmatpel'])->name('pengaturan.tambahmatpel');
    Route::post('matpelstore', [Profilecontroller::class, 'matpelstore'])->name('pengaturan.matpelstore');
    Route::get('matpeledit/{id}', [Profilecontroller::class, 'matpeledit'])->name('pengaturan.matpeledit');
    Route::post('matpel/store/{id}', [Profilecontroller::class, 'matpeleditstore'])->name('pengaturan.matpeleditstore');
    Route::get('deletematpel/{id}', [Profilecontroller::class, 'destroymatpels'])->name('pengaturan.destroymatpel');

    Route::get('login', [Controller::class, 'login']);
    Route::post('loginstore', [Controller::class, 'store'])->name('login.store');
});