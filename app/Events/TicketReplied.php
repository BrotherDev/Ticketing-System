<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class TicketReplied implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $notifications;

    public function __construct($notifications)
    {
        $this->notifications = $notifications;
    }

    public function broadcastOn()
    {
        return new PrivateChannel('ticket-replied');
    }

    public function broadcastWith()
    {
        return ['notifications' => $this->notifications];
    }
}