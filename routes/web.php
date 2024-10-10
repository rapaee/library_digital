<?php

use App\Http\Controllers\admin\bukuController;
use App\Http\Controllers\admin\dashboardController;
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

//raute view
Route::get('/role/admin/dashboardAdmin/',[dashboardController::class,'dashboardAdmin'])->name('dashboardAdmin');
Route::get('/role/admin/buku/',[bukuController::class,'bukuAdmin'])->name('buku');
Route::get('/role/user/dashboardUser/',[UserDashboardController::class,'dashboardUser'])->name('dashboardUser');
Route::get('/role/user/library/',[libraryController::class,'dashboardLibrary'])->name('library');


require __DIR__.'/auth.php';
