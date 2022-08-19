<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
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

Route::middleware('auth')->group(function(){
    Route::get('/', [HomeController::class, 'home'])->name('home');

    Route::get('student',[StudentController::class, 'list'])->name('student');
    Route::get('student/add',[StudentController::class, 'add'])->name('student.add');
    Route::post('student/store',[StudentController::class, 'store'])->name('student.store');
    Route::get('student/{id}/edit',[StudentController::class, 'edit'])->name('student.edit');
    Route::get('student/detail',[StudentController::class, 'detail'])->name('student.detail');
    Route::post('student/{id}/update',[StudentController::class, 'update'])->name('student.update');
    Route::get('student/{id}/delete',[StudentController::class, 'delete'])->name('student.delete');

    Route::get('admin',[AdminController::class, 'list'])->name('admin');
    Route::get('admin/add',[AdminController::class, 'add'])->name('admin.add');
    Route::post('admin/store',[AdminController::class, 'store'])->name('admin.store');
    Route::get('admin/{id}/edit',[AdminController::class, 'edit'])->name('admin.edit');
    Route::get('admin/detail',[AdminController::class, 'detail'])->name('admin.detail');
    Route::post('admin/{id}/update',[AdminController::class, 'update'])->name('admin.update');
    Route::get('admin/{id}/delete',[AdminController::class, 'delete'])->name('admin.delete');

});

Route::get('login',[AuthController::class, 'login']);
Route::post('login',[AuthController::class, 'goHome'])->name('login');
Route::get('logout',[AuthController::class, 'logout'])->name('logout');

