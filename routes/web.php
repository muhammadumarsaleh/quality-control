<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SpecialController;
use App\Http\Controllers\QualityControlController;

Route::get('/', function () {
    return redirect('/login');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
Route::get('special/dashboard', [SpecialController::class, 'index'])->middleware(['auth', 'special'])->name('special.dashboard');
Route::get('admin/dashboard', [HomeController::class, 'index']);

Route::get('/quality-control', function () {
    return view('quality-control');
})->name('quality-control');

Route::get('/standart', function () {
    return view('standart');
})->name('standart');

Route::get('/approval', function () {
    return view('approval');
})->name('approval');

require __DIR__.'/auth.php';

Route::resource('quality-control', QualityControlController::class);

