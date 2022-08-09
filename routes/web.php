<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PenyewaController;
use App\Http\Controllers\AlatController;
use App\Http\Controllers\PenyewaanController;
use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DiskonController;

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

Auth::routes();

Route::get('/', [ArtikelController::class, 'index'])->name('index');

// Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::group(['middleware' => ['auth']], function () {

    Route::get('/dashboard', [DashboardController::Class, 'index'])->name('dashboard');

    Route::get('/penyewa', [PenyewaController::Class, 'halamanpenyewa'])->name('penyewa');
    Route::get('/tambahpenyewa', [PenyewaController::Class, 'tambahpenyewa'])->name('tambahpenyewa');
    Route::post('/simpanpenyewa', [PenyewaController::Class, 'storepenyewa'])->name('simpanpenyewa');
    Route::get('/editpenyewa/{id}', [PenyewaController::Class, 'editpenyewa'])->name('editpenyewa');
    Route::post('/updatepenyewa/{id}', [PenyewaController::Class, 'update'])->name('updatepenyewa');
    Route::get('/deletepenyewa/{id}', [PenyewaController::Class, 'destroy'])->name('deletepenyewa');

    Route::get('/penyewaan', [PenyewaanController::Class, 'halamanpenyewaan'])->name('penyewaan');
    Route::get('/tambahsewa', [PenyewaanController::Class, 'tambahsewa'])->name('tambahsewa');
    Route::post('/simpansewa', [PenyewaanController::Class, 'storesewa'])->name('simpansewa');
    Route::get('/showsewa/{id}', [PenyewaanController::Class, 'show'])->name('showsewa');
    Route::get('/editsewa/{id}', [PenyewaanController::Class, 'editsewa'])->name('editsewa');
    Route::post('/updatesewa/{id}', [PenyewaanController::Class, 'update'])->name('updatesewa');
    Route::get('/deletesewa/{id}', [PenyewaanController::Class, 'destroy'])->name('deletesewa');
    Route::post('/kembalisewa/{id}', [PenyewaanController::Class, 'kembali'])->name('kembalisewa');

    Route::get('/alat', [AlatController::Class, 'halamanalat'])->name('alat');
    Route::get('/tambahalat', [AlatController::Class, 'tambahalat'])->name('tambahalat');
    Route::post('/simpanalat', [AlatController::Class, 'storealat'])->name('simpanalat');
    Route::get('/editalat/{id}', [AlatController::Class, 'editalat'])->name('editalat');
    Route::post('/updatealat/{id}', [AlatController::Class, 'update'])->name('updatealat');
    Route::get('/deletealat/{id}', [AlatController::Class, 'destroy'])->name('deletealat');

    Route::get('/diskon', [DiskonController::Class, 'halamandiskon'])->name('diskon');
    Route::get('/tambahdiskon', [DiskonController::Class, 'tambahdiskon'])->name('tambahdiskon');
    Route::post('/simpandiskon', [DiskonController::Class, 'storediskon'])->name('simpandiskon');
    Route::get('/editdiskon/{id}', [DiskonController::Class, 'editdiskon'])->name('editdiskon');
    Route::post('/updatediskon/{id}', [DiskonController::Class, 'update'])->name('updatediskon');
    Route::get('/deletediskon/{id}', [DiskonController::Class, 'destroy'])->name('deletdiskon');
});
