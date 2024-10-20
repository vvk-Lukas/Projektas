<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdminConferenceController;

Route::get('/', function () {
    return view('index');
});

Route::prefix('client')->group(function(){
    Route::get('/conferences', [ClientController::class, 'index'])->name('client.conferences.index');
    Route::get('/conferences/{id}', [ClientController::class, 'show'])->name('client.conferences.show');
});

Route::prefix('employee')->group(function() {
    Route::get('/conferences', [EmployeeController::class, 'index'])->name('employee.conferences.index');
    Route::get('/conferences/{id}', [EmployeeController::class, 'show'])->name('employee.conferences.show');
});

Route::prefix('admin')->group(function () {
    Route::get('/', [AdminController::class, 'index'])->name('admin.index');
    Route::get('/users', [AdminController::class, 'usersIndex'])->name('admin.users.index');
    Route::get('/users/{id}/edit', [AdminController::class, 'editUser'])->name('admin.users.edit');
    Route::post('/users/{id}/edit', [AdminController::class, 'updateUser'])->name('admin.users.update');
    Route::get('/conferences', [AdminConferenceController::class, 'index'])->name('admin.conferences.index');
    Route::get('/conferences/{id}/edit', [AdminConferenceController::class, 'editConference'])->name('admin.conferences.edit');
});
