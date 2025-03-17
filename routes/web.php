<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\EmployeeController;
use App\Events\TicketCreate;

Route::get('/', function () {
    return view('index');
});


Route::get('/run-server', function () {
    if (app()->environment('local')) {  // Only allow on local environment
        Artisan::call('queue:listen');
        Artisan::call('schedule:work');
        Artisan::call('reverb:start');
        return nl2br(Artisan::output());
    }
    abort(403, 'Unauthorized action.');
});



require __DIR__ . '/auth/user-auth.php';
require __DIR__ . '/ticket/ticket-route.php';


