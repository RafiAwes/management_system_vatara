<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homeController;
use App\Http\Controllers\slotcontroller;
use App\Http\Controllers\batchController;
use App\Http\Controllers\eventController;
use App\Http\Controllers\noticecontroller;
use App\Http\Controllers\reportController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\requestController;
use App\Http\Controllers\studentController;
use App\Http\Controllers\trainerController;
use App\Http\Controllers\feedbackController;
use App\Http\Controllers\attendanceController;
use App\Http\Controllers\StripePaymentController;

Route::get('/',[homeController::class, 'home']);
Route::get('/admin', function () {
    return redirect('admin/login');
});
Route::get('/trainer', function () {
    return redirect('trainer/login');
});

Route::get('/student', function () {
    return redirect('student/login');
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
    Route::get('/profile/{id}',[studentController::class,'profile']);
    Route::post('/profile/update',[studentController::class,'edit'])->name('student.edit.profile');
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
    Route::get('/take/{id}',[attendanceController::class,'attendancePage'])->name('attendance.list');
    Route::post('/save/attendance',[attendanceController::class,'saveAttendance'])->name('submit.attendance');
});

Route::prefix('slot')->group(function(){
    Route::get('/create/page',[slotcontroller::class, 'slotCreatingPage'])->name('slot.create.page');
    Route::post('/create',[slotcontroller::class, 'createSlot'])->name('slot.create');
});
Route::prefix('notice')->group(function(){
    Route::get('/create/notice',[noticecontroller::class, 'noticeform'])->name('notice.create.page');
    Route::post('/send',[noticecontroller::class, 'sendNotice'])->name('notice.send');
});
Route::prefix('event')->group(function(){
    Route::get('/form',[eventController::class,'eventForm'])->name('event.form');
    Route::post('/create',[eventController::class,'createEvent'])->name('event.create');
    Route::get('/admin/list',[eventController::class,'adminEventList'])->name('event.admin.list');
    Route::get('/student/list',[eventController::class,'studentEventList'])->name('event.student.list');
    Route::get('/trainer/list',[eventController::class,'trainerEventList'])->name('event.trainer.list');
});

Route::prefix('payment')->group(function(){
    Route::get('/page',[StripePaymentController::class, 'stripe'])->name('stripe.view');
    Route::post('/pay',[StripePaymentController::class, 'stripePost'])->name('stripe.post');

});
Route::prefix('feedback')->group(function(){
    Route::get('/form',[feedbackController::class, 'feedbackForm'])->name('feedback.form');
    Route::post('/send',[feedbackController::class, 'sendFeedback'])->name('feedback.post');
    Route::get('/view',[feedbackController::class, 'feedbacks'])->name('feedback.view');

});
Route::prefix('report')->group(function(){
    Route::get('/report/view',[reportController::class, 'viewReport'])->name('view.report');
});

Route::post('/request',[requestController::class, 'submit'])->name('send.request');


require __DIR__.'/auth.php';
require __DIR__.'/admin-auth.php';
require __DIR__.'/trainer-auth.php';
require __DIR__.'/student-auth.php';
