<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\batchController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\studentController;
use App\Http\Controllers\trainerController;

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

Route::prefix('student')->group(function(){
    Route::get('/list',[studentController::class,'viewStudentList'])->name('student.list');
});
Route::prefix('trainer')->group(function(){
    Route::get('/list',[trainerController::class,'trainerList'])->name('trainer.list');
});

Route::prefix('batch')->group(function(){
    Route::get('/create/page',[batchController::class, 'createBatchPage'])->name('batch.createPage');
    Route::post('/create',[batchController::class, 'create'])->name('batch.create');
    Route::get('/list',[batchController::class, 'batchList'])->name('batch.batchlist');
});

require __DIR__.'/auth.php';
require __DIR__.'/admin-auth.php';
require __DIR__.'/trainer-auth.php';
require __DIR__.'/student-auth.php';
