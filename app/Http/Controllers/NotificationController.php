<?php

namespace App\Http\Controllers;

use App\Models\Notification;
use Illuminate\Http\Request;

class NotificationController extends Controller
{
    public function notificationRead($notificationId)
    {
        $notification = Notification::findOrFail($notificationId);
        
        \Log::info("Notification ticket_id: " . $notification->ticket_id);  // Log ticket_id
    
        if ($notification->is_read == 0) {
            $notification->is_read = 1;
            $notification->save();
        }
    
        return redirect()->route('ticket.show', ['ticketId' => $notification->ticket_id]);
    }

    public function markAsRead(Request $request, $id)
    {
        // $notification = Notification::where('ticket_id', $id)->first();
        $notification = Notification::where('ticket_id', $id)
                            ->where('user_id', auth()->id()) // Ensure the logged-in user owns the notification
                            ->first();

        if (!$notification) {
            return response()->json(['success' => false, 'message' => 'Notification not found'], 404);
        }

        $notification->is_read = 1;
        $notification->save();

        return response()->json(['success' => true]);
    }

}
