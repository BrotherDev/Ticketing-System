<?php

namespace App\Http\Controllers;

use App\Models\Reply;
use App\Models\Notification;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Mail\TicketReplied;
use App\Models\Ticket;

class ReplyController extends Controller
{
    // public function store(Request $request, Ticket $ticket) {
    //     $request->validate(['message' => 'required']);


    //     $reply = Reply::create([
    //         'ticket_id' => $ticket->id,
    //         'user_id' => Auth::user()->id,
    //         'message' => $request->message,
    //     ]);

    //     if (Auth::user()->role === 'agent' || Auth::user()->role === 'moderator') {
    //         $type = 'ticket_replied';
    //     }else{
    //         $type = 'user_replied';
    //     }

    //     // Notify User
    //     Notification::create([
    //         'user_id' => $ticket->user_id,
    //         'ticket_id' => $ticket->id,
    //         'type' => $type,
    //         'message' => Auth::user()->name . ': ' . $ticket->subject,
    //     ]);

    //     Mail::to($ticket->user->email)->send(new TicketReplied($ticket, $reply));

    //     return back();
    // }
}
