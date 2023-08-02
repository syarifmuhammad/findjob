<?php

use App\Http\Controllers\ApiSkillController;
use App\Http\Controllers\Admin\DashboardController as AdminDashboardController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ManageCompanyController;
use App\Http\Controllers\ManageVacancyController;
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

Route::middleware('auth')->prefix('/in')->name('profile.')->group(function () {
    Route::get('/{slug}', [ProfileController::class, 'index'])->name('index');
    Route::patch('', [ProfileController::class, 'update'])->name('update');
    Route::delete('', [ProfileController::class, 'destroy'])->name('destroy');
});
Route::prefix('/companies')->name('companies.')->group(function () {
    Route::get('', [CompanyController::class, 'index'])->name('index');
    Route::middleware('auth')->group(function () {
        Route::get('/create', [CompanyController::class, 'create'])->name('create');
        Route::post('/store', [CompanyController::class, 'store'])->name('store');
        Route::prefix(('/{id}/admin'))->name('admin.')->group(function () {
            Route::get('', [ManageCompanyController::class, 'index'])->name('index');
        });
    });
    Route::get('/{id}', [CompanyController::class, 'show'])->name('show');
});

Route::get('skills', [ApiSkillController::class, 'search'])->name('skills.search');

Route::prefix('/vacancies')->name('vacancies.')->group(function () {
    Route::get('', [VacancyController::class, 'index'])->name('index');
    Route::get('/collection', [VacancyController::class, 'collection'])->name('collection');
    // Route::get('/{id}', [CompanyController::class, 'show'])->name('show');
    Route::middleware('auth')->group(function () {
        Route::get('/my-vacancies', [VacancyController::class, 'my_vacancies'])->name('my_vacancies');
        Route::post('{id}/apply', [VacancyController::class, 'apply'])->name('apply');
    });
    Route::prefix(('/admin'))->middleware('auth')->name('admin.')->group(function () {
        Route::get('', [ManageVacancyController::class, 'index'])->name('index');
        Route::post('/store', [ManageVacancyController::class, 'store'])->name('store');
    });
});
Route::prefix('/courses')->name('course.')->group(function () {
    Route::get('/', [CourseController::class, 'index'])->name('index');
    Route::get('/{id}', [CourseController::class, 'detail'])->name('detail');
});

Route::prefix('/recruitments')->name('recruitment.')->group(function () {
    Route::get('/', [RecruitmentController::class, 'index'])->name('index');
    Route::get('/create', [RecruitmentController::class, 'create'])->name('create');
});

require __DIR__ . '/auth.php';
