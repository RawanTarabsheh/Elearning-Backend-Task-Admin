<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\AcademicLevelController;
use App\Http\Controllers\Admin\StudentController;
use App\Http\Controllers\Admin\MajorController;
use App\Http\Controllers\Admin\CareerSubmissionController;
use App\Http\Controllers\Admin\NewsController;
use App\Http\Controllers\Admin\TestimonialController;


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

require __DIR__.'/auth.php';


Route::middleware(['auth'])->prefix('admin')->name('admin.')->group(function () {
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
    Route::resource('academic-levels', AcademicLevelController::class);
    Route::resource('students', StudentController::class);
    Route::resource('majors', MajorController::class);
    Route::get('career-submissions', [CareerSubmissionController::class, 'index'])->name('career-submissions.index');
    Route::get('career-submissions/{careerSubmission}/cv', [CareerSubmissionController::class, 'downloadCv'])
    ->name('career-submissions.cv');
    Route::resource('news', NewsController::class)->parameters(['news' => 'news']);
    Route::resource('testimonials', TestimonialController::class);

});