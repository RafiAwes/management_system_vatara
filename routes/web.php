<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\slotcontroller;
use App\Http\Controllers\batchController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\studentController;
use App\Http\Controllers\trainerController;
use App\Http\Controllers\attendanceController;

Route::get('/admin', function () {
    return view('adminWelcome');
});
Route::get('/trainer', function () {
    return view('trainerWelcome');
});

Route::get('/student', function () {
    return view('studentWelcome');
});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

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
    Route::get('/batches',[trainerController::class,'trainerBatches'])->name('trainers.batches');
    Route::get('/details/{id}',[trainerController::class, 'trainerDetails']);

});

Route::prefix('batch')->group(function(){
    Route::get('/create/page',[batchController::class, 'createBatchPage'])->name('batch.createPage');
    Route::post('/create',[batchController::class, 'create'])->name('batch.create');
    Route::get('/list',[batchController::class, 'batchList'])->name('batch.batchlist');
    Route::get('/details/{id}',[batchController::class, 'batchDetails']);
    // Route::post('/get/available/trainers',[batchController::class, 'getAvailavleTrainers']);
});
Route::prefix('attendance')->group(function(){
    Route::get('/view/batches',[attendanceController::class,'viewBatches'])->name('attendance.batchlist');
    Route::get('/take/{id}',[attendanceController::class,'attendancepage'])->name('attendance.list');
});

Route::prefix('slot')->group(function(){
    Route::get('/create/page',[slotcontroller::class, 'slotCreatingPage'])->name('slot.create.page');
    Route::post('/create',[slotcontroller::class, 'createSlot'])->name('slot.create');
});

require __DIR__.'/auth.php';
require __DIR__.'/admin-auth.php';
require __DIR__.'/trainer-auth.php';
require __DIR__.'/student-auth.php';
