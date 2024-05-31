<?php

use App\Models\Student;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CourController;
use App\Http\Controllers\StudentController;

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

Route::get('/', function () {
    return view('layouts.app');
});

Route::prefix('student')->name('student.')->group(function () {
    Route::get('/', [StudentController::class, 'index'])->name('index');
    Route::get('/create', [StudentController::class, 'create'])->name('create');
    Route::post('/', [StudentController::class, 'store'])->name('store');
    Route::get('/delet', [StudentController::class, 'destroy'])->name('destroy');
    Route::get('/edit/{id}', [StudentController::class, 'edit'])->name('edit');
    Route::post('/update', [studentController::class, 'update'])->name('update');
});

Route::prefix('cour')->name('cour.')->group(function () {
    Route::get('/', [CourController::class, 'index'])->name('index');
    Route::get('/create', [CourController::class, 'create'])->name('create');
    Route::post('/', [CourController::class, 'store'])->name('store');
});
