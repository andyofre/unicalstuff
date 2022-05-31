<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\FrontendController;
use App\Http\Controllers\FacultyController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\PickedCourseController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('application.apply');
});

Auth::routes();



Route::get('/register-student', [FrontendController::class, 'registerStudent'])->name('register.student');

Route::get('/validate-student', [FrontendController::class, 'validateStudent'])->name('validate.student');

Route::post('/validate-check', [FrontendController::class, 'checkStudent'])->name('check.student');

Route::get('/add-course', [FrontendController::class, 'addCourse'])->name('add.course');
// Route::post('/picked-course', [PickedCourseController::class, 'store'])->name('picked.store');

Route::post('/add-course-save', [StudentController::class, 'store'])->name('picked.add');




Route::prefix('user')->group(function () {

    Route::get('/dashboard', [UserController::class, 'index'])->name('user.dashboard');

    Route::get('/students', [StudentController::class, 'index'])->name('student.view');

    // faculties  operations
    Route::get('/faculties', [FacultyController::class, 'index'])->name('facultyView');
    Route::post('/faculty-store', [FacultyController::class, 'store'])->name('add.faculty');
    Route::get('/faculty-delete/{id}', [FacultyController::class, 'destroy'])->name('delete.faculty');

    // departments  operations
    Route::get('/departments', [DepartmentController::class, 'index'])->name('departmentView');
    Route::get('/department-create', [DepartmentController::class, 'create'])->name('departmentCreate');
    Route::post('/department-store', [DepartmentController::class, 'store'])->name('store.department');
    Route::get('/department-edit/{id}', [DepartmentController::class, 'edit'])->name('edit.department');
    Route::post('/department-update/{id}', [DepartmentController::class, 'update'])->name('update.department');

    // courses  operations
    Route::get('/courses', [CourseController::class, 'index'])->name('courseView');

    Route::get('/course-create', [CourseController::class, 'create'])->name('courseCreate');

    Route::post('/course-store', [CourseController::class, 'store'])->name('store.course');
});