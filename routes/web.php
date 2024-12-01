<?php

use App\Http\Controllers\ClientController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdminConferenceController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\RegisterController;
use App\Http\Middleware\RoleMiddleware;

Route::get('/', function () {
    return view('index');
})->name('home');

Route::prefix('client')->middleware(['auth', 'can:access-client'])->group(function () {
    Route::get('/conferences', [ClientController::class, 'index'])->name('client.index');
    Route::get('/conferences/{id}', [ClientController::class, 'show'])->name('client.show');
    Route::post('/conferences/{id}/register', [ClientController::class, 'register'])->name('client.register');
});

Route::prefix('employee')->middleware(['auth', 'can:access-employee'])->group(function () {
    Route::get('/conferences', [EmployeeController::class, 'index'])->name('employee.index');
    Route::get('/conferences/{id}', [EmployeeController::class, 'show'])->name('employee.show');
});

Route::prefix('admin')->middleware(['auth', RoleMiddleware::class . ':admin'])->group(function () {
    Route::get('/', [AdminController::class, 'index'])->name('admin.index');
    Route::get('/users', [AdminController::class, 'usersIndex'])->name('admin.users.index');
    Route::get('/users/{id}/edit', [AdminController::class, 'editUser'])->name('admin.users.edit');

    // Konferencijų maršrutai
    Route::get('/conferences', [AdminConferenceController::class, 'index'])->name('admin.conferences.index');
    Route::get('/conferences/create', [AdminConferenceController::class, 'create'])->name('admin.conferences.create');
    Route::post('/conferences', [AdminConferenceController::class, 'store'])->name('admin.conferences.store');
    Route::get('/conferences/{id}/edit', [AdminConferenceController::class, 'edit'])->name('admin.conferences.edit');
    Route::put('/conferences/{id}', [AdminConferenceController::class, 'update'])->name('admin.conferences.update');
    Route::delete('/conferences/{id}', [AdminConferenceController::class, 'destroy'])->name('admin.conferences.destroy');
});

Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register']);

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

