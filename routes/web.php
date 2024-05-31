<?php

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Profilecontroller;

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
Route::get('login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('login', [AuthController::class, 'login']);
Route::post('logout', [AuthController::class, 'logout'])->name('logout');
Route::get('dashboard', function () {
    return view('dashboard');
})->middleware('auth');

Route::prefix('admin')->group(function () {
    Route::get('pengaturan', [Profilecontroller::class, 'index'])->name('pengaturan.profile');
    Route::get('ubahinfo', [Profilecontroller::class, 'ubahinfo'])->name('ubahinfo');
    Route::post('infostore', [Profilecontroller::class, 'infostore'])->name('infostore');
    Route::get('ubahpw', [Profilecontroller::class, 'ubahpw'])->name('ubahpw');
    Route::post('pwstore', [Profilecontroller::class, 'pwstore'])->name('pwstore');
    Route::post('addimage', [Profilecontroller::class, 'addimage'])->name('addimage');
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

    // search
    Route::get('searchrak', [Profilecontroller::class, 'searchrak'])->name('seach.rak');
    Route::get('searchsubjek', [Profilecontroller::class, 'searchsubjek'])->name('seach.subjek');
    Route::get('searchkarya', [Profilecontroller::class, 'searchkarya'])->name('seach.karya');
    Route::get('searchmatpel', [Profilecontroller::class, 'searchmatpel'])->name('seach.matpel');


});