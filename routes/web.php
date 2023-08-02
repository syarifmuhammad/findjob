<?php

use App\Http\Controllers\Admin\DashboardController as AdminDashboardController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RecruitmentController;
use App\Http\Controllers\VacancyController;
use Illuminate\Support\Facades\Route;

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

Route::prefix('/admin')->name('admin.')->group(function () {
    Route::get('', [AdminDashboardController::class, 'index'])->name('index');
    Route::get('/course', [AdminDashboardController::class, 'course'])->name('course');
    Route::get('/vacancy', [AdminDashboardController::class, 'vacancy'])->name('vacancy');
    Route::get('/course/{id}', [AdminDashboardController::class, 'detail'])->name('detail');
    Route::middleware('auth')->group(function () {
       
        Route::post('/store', [CompanyController::class, 'store'])->name('store');
    });
});


Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
// ->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    
});
Route::prefix('/companies')->name('companies.')->group(function () {
    Route::get('', [CompanyController::class, 'index'])->name('index');
    Route::middleware('auth')->group(function () {
        Route::get('/create', [CompanyController::class, 'create'])->name('create');
        Route::post('/store', [CompanyController::class, 'store'])->name('store');
    });
});
// Route::get('/courses', [CourseController::class, 'index'])->name('course');
Route::prefix('/courses')->name('course.')->group(function () {
    Route::get('/', [CourseController::class, 'index'])->name('index');
    Route::get('/{id}', [CourseController::class, 'detail'])->name('detail');
});

Route::get('/vacancies', [VacancyController::class, 'index'])->name('vacancy.index');

Route::prefix('/recruitments')->name('recruitment.')->group(function () {
    Route::get('/', [RecruitmentController::class, 'index'])->name('index');
    Route::get('/create', [RecruitmentController::class, 'create'])->name('create');
});

require __DIR__.'/auth.php';
