<?php

use App\Http\Controllers\StudentController;
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;

// Student Routes
Route::get('/', [StudentController::class, 'index'])->name('student.index');
Route::get('/search', [StudentController::class, 'search'])->name('student.search');

// Admin Routes
Route::prefix('admin')->group(function () {
    Route::get('/', [AdminController::class, 'index'])->name('admin.index');
    Route::get('/create', [AdminController::class, 'create'])->name('admin.create');
    Route::post('/store', [AdminController::class, 'store'])->name('admin.store');
    Route::get('/edit/{id}', [AdminController::class, 'edit'])->name('admin.edit');
    Route::post('/update/{id}', [AdminController::class, 'update'])->name('admin.update');
    Route::get('/delete/{id}', [AdminController::class, 'delete'])->name('admin.delete');
});

// About and Contact routes
Route::get('/about', fn() => view('about'))->name('about');  

Route::get('/contact', fn() => view('contact'))->name('contact'); 