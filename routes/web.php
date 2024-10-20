<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\EmployeeController;

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
