<?php

use Illuminate\Support\Facades\Broadcast;
use App\Models\User;

Broadcast::channel('App.Models.User.{id}', function ($user, $id) {
    return (int) $user->id === (int) $id;
});


Broadcast::channel('ticket-create', function ($user) {
    return Auth::check();
});

Broadcast::channel('ticket-assigned', function ($user) {
    return Auth::check();
});

Broadcast::channel('ticket-replied', function ($user) {
    return Auth::check();
});

Broadcast::channel('ticket-status-updated', function ($user) {
    return Auth::check();
});
