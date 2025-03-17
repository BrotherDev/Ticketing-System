<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\TicketController;
use App\Http\Controllers\NotificationController;
use App\Http\Controllers\ReplyController;

Route::prefix('user')->middleware('auth:web')->group(function () {
    Route::resource('tickets', TicketController::class);
    Route::post('tickets/{ticket}/reply', [ReplyController::class, 'store'])->name('tickets.reply');
    Route::get('/tickets/view/by/status', [TicketController::class, 'viewByStatus'])->name('ticketViewByStatus');

    Route::prefix('ticket')->group(function () {
        Route::post('/create/ticket', [TicketController::class, 'store'])->name('user.create.ticket');
        Route::post('/assign-agent/{ticketId}', [TicketController::class, 'assignAgent'])->name('asign.agent');
        Route::post('/reply/{ticketId}', [TicketController::class, 'ticketReply'])->name('ticket.reply');
        Route::get('/view/{ticketId}', [TicketController::class, 'ticketShow'])->name('ticket.show');
        Route::put('/ticket/status/update/{ticketId}', [TicketController::class, 'ticketStatusUpdate'])->name('ticket.status.update');

        
        Route::get('/notification/read/{notificationId}', [NotificationController::class, 'notificationRead'])->name('ticket.show.by.notification');
        Route::put('/notification/read/js/{notificationId}', [NotificationController::class, 'markAsRead'])->name('markAsReadByJs');
        
    });
});
