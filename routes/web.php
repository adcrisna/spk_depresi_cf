<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\IndexController;

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

Route::any('/', [IndexController::class, 'index'])->name('index');
Route::any('/informasi', [IndexController::class, 'informasi'])->name('informasi');
Route::any('/form_diagnosa', [IndexController::class, 'form_diagnosa'])->name('form_diagnosa');
Route::any('/diagnosa', [IndexController::class, 'diagnosa'])->name('diagnosa');
Route::any('/hasil_diagnosa/{id}', [IndexController::class, 'hasil_diagnosa'])->name('hasil_diagnosa');
Route::any('/login', [LoginController::class, 'login'])->name('login');
Route::any('/proses_login', [LoginController::class, 'prosesLogin'])->name('prosesLogin');
Route::any('/logout', [LoginController::class, 'logout'])->name('logout');

Route::middleware(['auth'])->group(function () {
    Route::prefix('admin')->middleware(['admin'])->group(function () {
        Route::any('/home', [AdminController::class, 'index'])->name('admin.index');
        Route::any('/profile', [AdminController::class, 'profile'])->name('admin.profile');
        Route::any('/update_profile', [AdminController::class, 'updateProfile'])->name('admin.updateProfile');

        Route::any('/gejala', [AdminController::class, 'gejala'])->name('admin.gejala');
        Route::any('/addGejala', [AdminController::class, 'addGejala'])->name('admin.addGejala');
        Route::any('/updateGejala', [AdminController::class, 'updateGejala'])->name('admin.updateGejala');
        Route::any('/deleteGejala/{id}', [AdminController::class, 'deleteGejala'])->name('admin.deleteGejala');

        Route::any('/aturan', [AdminController::class, 'aturan'])->name('admin.aturan');
        Route::any('/addAturan', [AdminController::class, 'addAturan'])->name('admin.addAturan');
        Route::any('/updateAturan', [AdminController::class, 'updateAturan'])->name('admin.updateAturan');
        Route::any('/deleteAturan/{id}', [AdminController::class, 'deleteAturan'])->name('admin.deleteAturan');

        Route::any('/diagnosis', [AdminController::class, 'diagnosis'])->name('admin.diagnosis');
        Route::any('/detail_diagnosis/{id}', [AdminController::class, 'detailDiagnosis'])->name('admin.detailDiagnosis');
        Route::any('/deleteDiagnosis/{id}', [AdminController::class, 'deleteDiagnosis'])->name('admin.deleteDiagnosis');
    });
});
