<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\HomeController;


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', [HomeController::class, 'index'])->name('dashboard');
});
