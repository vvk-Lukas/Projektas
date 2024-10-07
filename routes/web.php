<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientController;

Route::get('/', function () {
    return view('index');
});

Route::prefix('client')->group(function(){
    Route::get('/conferences', [ClientController::class, 'index'])->name('client.conferences.index');
    Route::get('/conferences/{id}', [ClientController::class, 'show'])->name('client.conferences.show');
});
