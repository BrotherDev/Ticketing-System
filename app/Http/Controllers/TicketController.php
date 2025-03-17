<?php

namespace App\Http\Controllers;

use App\Models\Ticket;
use Illuminate\Http\Request;
use App\Models\Notification;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\TicketAssignment;
use App\Events\TicketCreate;
use App\Events\TicketAssigned;
use App\Events\TicketReplied;
use App\Events\TicketStatusUpdated;

class TicketController extends Controller
{

    public function store(Request $request) {
        $request->validate([
            'subject' => 'required|string|max:255',
            'problem_details' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'department' => 'required|string',
        ]);

        // Initialize $filePath to null
        $filePath = null;

        // Handle company logo upload if provided
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $imageName = 'ticket_' . Auth::id();
            $filename =  $imageName .'_'. time() . '.' . $file->getClientOriginalExtension();

            // Define the target directory within the public directory
            $targetDir = 'uploads/tickets';

            // Store the file in the public directory
            $file->storeAs($targetDir, $filename, 'public'); // 'public' disk

            // Save the path in the database (relative path for better flexibility)
            $filePath = $targetDir . '/' . $filename;
        }

        $ticket = Ticket::create([
            'user_id' => Auth::id(),
            'subject' => $request->subject,
            'problem_details' => $request->problem_details,
            'image' => $filePath,
            'status' => 'open',
            'priority' => 'low',
            'department' => $request->department,
        ]);

        // Get Moderators & Agents
        $users = User::whereIn('role', ['moderator', 'agent'])->get();

        $notifications = [];
        foreach ($users as $user) {
            $notifications[] = [
                'user_id' => $user->id,
                'ticket_id' => $ticket->id,
                'type' => 'ticket_created',
                'message' => Auth::user()->name . ': ' . $ticket->subject,
            ];
        }

        // Dispatch Event with Notification Data
        event(new TicketCreate($notifications));

        // Save Notifications in DB
        Notification::insert($notifications);

        return redirect()->route('dashboard')->with('success', 'Ticket created successfully.');
    }

    public function assignAgent(Request $request, $ticketId) {
        $request->validate([
            'agent_id' => 'required|exists:users,id',
        ]);
    
        $ticket = Ticket::findOrFail($ticketId);
        $ticket->assigned_agent_id = $request->agent_id;
        $ticket->assigned_moderator_id = Auth::user()->id;
        $ticket->status = 'in_progress';
        $ticket->save();
    
        // Log the assignment with additional details
        TicketAssignment::create([
            'ticket_id' => $ticket->id,
            'moderator_id' => Auth::user()->id,
            'agent_id' => $request->agent_id,
            'assigned_at' => now(),
            'reason' => $request->reason,
            'notes' => 'assign_agent',
        ]);
    
        // Notify User & Agent
        $ticketCreator = $ticket->user_id; // Assuming 'user_id' is the creator of the ticket
        $assignedAgent = $ticket->assigned_agent_id; // Assuming 'agent_id' is assigned to the ticket

        $notifications = [
            [
                'user_id' => $assignedAgent,
                'ticket_id' => $ticket->id,
                'type' => 'agent_assigned',
                'message' => Auth::user()->name . ':' . 'Assigned you a new Ticket',
            ],
            [
                'user_id' => $ticketCreator,
                'ticket_id' => $ticket->id,
                'type' => 'agent_assigned',
                'message' => Auth::user()->name . ':' . 'An agent assigned your Ticket',
            ]
        ];
    
        // Dispatch Event with Notification Data
        event(new TicketAssigned($notifications));
    
        // Save Notifications in DB
        Notification::insert($notifications);
    
        return redirect()->route('dashboard')->with('success', 'Agent assigned successfully.');
    }

    public function ticketShow($ticketId) {
        $ticket = Ticket::findOrFail($ticketId);
        return view('frontend.ticket.show', compact('ticket'));
    }
    
    public function ticketReply(Request $request, $ticketId) {
        $request->validate([
            'message' => 'required|string',
            'reply_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        // Initialize $filePath to null
        $imageReply = null;

        // Handle company logo upload if provided
        if ($request->hasFile('reply_image')) {
            $file = $request->file('reply_image');
            $imageName = 'ticket_' . Auth::id();
            $filename =  $imageName .'_'. time() . '.' . $file->getClientOriginalExtension();

            // Define the target directory within the public directory
            $targetDir = 'uploads/tickets/replies';

            // Store the file in the public directory
            $file->storeAs($targetDir, $filename, 'public'); // 'public' disk

            // Save the path in the database (relative path for better flexibility)
            $imageReply = $targetDir . '/' . $filename;
        }
    
        $ticket = Ticket::findOrFail($ticketId);
    
        $reply = $ticket->replies()->create([
            'user_id' => Auth::id(),
            'message' => $request->message,
            'reply_image' => $imageReply,
        ]);
    
        $ticketCreator = $ticket->user_id; // Creator of the ticket
        $assignedAgent = $ticket->assigned_agent_id; // Assigned agent
    
        $currentUser = Auth::id(); // Currently logged-in user
    
        $notifications = [];
    
        if ($currentUser == $ticketCreator) {
            // User replied, notify agent
            if ($assignedAgent) {
                $notifications[] = [
                    'user_id' => $assignedAgent,
                    'ticket_id' => $ticket->id,
                    'type' => 'user_replied',
                    'message' => Auth::user()->name . ':' . 'Ticket Creator reply: ' . $ticket->subject,
                ];
            }
        } elseif ($currentUser == $assignedAgent) {
            // Agent replied, notify user
            $notifications[] = [
                'user_id' => $ticketCreator,
                'ticket_id' => $ticket->id,
                'type' => 'ticket_replied',
                'message' => Auth::user()->name . ':' . 'Agent reply : ' . $ticket->subject,
            ];
        }
    
        // Dispatch Event with Notification Data
        event(new TicketReplied($notifications));
    
        // Save Notifications in DB
        Notification::insert($notifications);
    
        return redirect()->route('ticket.show', $ticketId)->with('success', 'Reply added successfully.');
    }
    
    public function ticketStatusUpdate(Request $request, $ticketId) {
        $request->validate([
            'status' => 'required|string|in:open,in_progress,resolved,closed,solved',
        ]);
    
        $ticket = Ticket::findOrFail($ticketId);
        $ticket->status = $request->status;
        $ticket->save();
    
        $ticketCreator = $ticket->user_id; // Creator of the ticket
        $assignedAgent = $ticket->assigned_agent_id; // Assigned agent
    
        $currentUser = Auth::id(); // Currently logged-in user
        $userRole = Auth::user()->role; // Get user role from the 'role' column
    
        $notifications = [];
    
        // If the current user is the assigned agent OR a moderator, notify the ticket creator
        if ($currentUser == $assignedAgent || $userRole == 'moderator') {
            $notifications[] = [
                'user_id' => $ticketCreator,
                'ticket_id' => $ticket->id,
                'type' => 'status_changed',
                'message' => Auth::user()->name . ':' . 'Ticket status updated : ' . $ticket->subject,
            ];
        }
    
        // Dispatch Event with Notification Data
        event(new TicketStatusUpdated($notifications));
    
        // Save Notifications in DB
        Notification::insert($notifications);
    
        // Log the assignment with additional details
        TicketAssignment::create([
            'ticket_id' => $ticket->id,
            'moderator_id' =>  $ticket->assigned_moderator_id,
            'agent_id' => Auth::user()->id,
            'assigned_at' => now(),
            'reason' => $request->status,
            'notes' => 'status_changed',
        ]);
    
        return redirect()->route('ticket.show', $ticketId)->with('success', 'Ticket status updated successfully.');
    }


    public function viewByStatus(Request $request)
    {
        // Get the status from the query parameter (e.g., ?status=open)
        $status = $request->query('status');
        
        // Fetch the tickets filtered by status and user ID
        $tickets = Ticket::where('status', $status)
                         ->where('user_id', auth()->id())  // Ensure the user is authenticated
                         ->get();

        // Return the view with the tickets
        return view('frontend.ticket.view-by-user.all-ticket-view', compact('tickets', 'status'));
    }
}
