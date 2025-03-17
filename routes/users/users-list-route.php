<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\UserListController;


Route::prefix('admin')->middleware('auth:admin')->group(function () {

    // Custom routes for UserListController
    Route::get('/user-list', [UserListController::class, 'index'])->name('userList.index');
    Route::get('/user-list/{user}', [UserListController::class, 'show'])->name('userList.show');
    Route::get('/user-list/{user}/edit', [UserListController::class, 'edit'])->name('userList.edit');
    Route::put('/user-list/{user}', [UserListController::class, 'update'])->name('userList.update');


    Route::post('/user-list/store/new', [UserListController::class, 'store'])->name('userList.store');
    Route::put('/user-list/{user}/editUserModal', [UserListController::class, 'updateUserModal'])->name('userList.updateUserModal');

});
