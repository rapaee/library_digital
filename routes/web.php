<?php

use App\Http\Controllers\admin\bukuController;
use App\Http\Controllers\admin\dashboardController;
use App\Http\Controllers\admin\peminjamanController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RouteController;
use App\Http\Controllers\user\dashboardController as UserDashboardController;
use App\Http\Controllers\user\libraryController;
use Illuminate\Support\Facades\Route;
use Symfony\Component\Routing\RouteCompiler;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

//route view
Route::get('/role/admin/dashboardAdmin/',[dashboardController::class,'dashboardAdmin'])->name('dashboardAdmin');
Route::get('/role/admin/buku/',[bukuController::class,'bukuAdmin'])->name('buku');
Route::get('/role/admin/peminjaman/',[peminjamanController::class,'index'])->name('peminjaman');


Route::get('/role/user/dashboardUser/',[UserDashboardController::class,'dashboardUser'])->name('dashboardUser');
Route::get('/role/user/library/',[libraryController::class,'dashboardLibrary'])->name('library');

//inputan buku
Route::get('/role/admin/input_buku/',[bukuController::class,'create'])->name('input_buku');
Route::post('/role/admin/input_buku', [BukuController::class, 'store'])->name('input.buku');
Route::get('/buku/{id}/edit', [bukuController::class, 'edit'])->name('edit.buku');
Route::put('/buku/{id}/', [bukuController::class, 'update'])->name('update.buku');
Route::delete('buku/{id}', [bukuController::class,'destroy'])->name('delete.buku');




require __DIR__.'/auth.php';
