<?php

namespace App\Console\Commands;

use Illuminate\Support\Facades\Notification;
use App\Models\TicketAssignment;
use Illuminate\Console\Command;
use App\Events\TicketAssigned;
use App\Models\Ticket;
use App\Models\User;
use Carbon\Carbon;

class AutoAssignAgent extends Command
{
    protected $signature = 'assign:agent';
    protected $description = 'Auto-assign agents to tickets not assigned in 1 minutes';

    public function handle()
    {
        // Get all tickets that are not assigned to an agent and are older than 1 minutes
        $tickets = Ticket::whereNull('assigned_agent_id')
                         ->where('created_at', '<', Carbon::now()->subMinutes(1))
                         ->get();

        foreach ($tickets as $ticket) {
            // Randomly select an agent with the role 'agent'
            $agent = User::where('role', 'agent')->inRandomOrder()->first();

            if ($agent) {
                // Assign agent to the ticket and update status
                $ticket->assigned_agent_id = $agent->id;
                $ticket->assigned_moderator_id = 1; // Set moderator to the currently authenticated user
                $ticket->status = 'in_progress';
                $ticket->save();

                // Log the assignment in TicketAssignment
                TicketAssignment::create([
                    'ticket_id' => $ticket->id,
                    'moderator_id' => 1, // Set moderator ID to currently logged-in user
                    'agent_id' => $agent->id,
                    'assigned_at' => now(),
                    'reason' => 'auto_assign', // You could adjust the reason for the auto-assignment if needed
                    'notes' => 'auto_assign_agent',
                ]);

                // Get the creator of the ticket and send notifications
                $ticketCreator = $ticket->user_id; // Assuming 'user_id' is the creator of the ticket
                $assignedAgent = $ticket->assigned_agent_id;

                // Prepare notifications for the agent and the ticket creator
                $notifications = [
                    [
                        'user_id' => $assignedAgent,
                        'ticket_id' => $ticket->id,
                        'type' => 'agent_assigned',
                        'message' => 'Auto' . ': ' . 'Assigned you a new Ticket via auto-assign',
                    ],
                    [
                        'user_id' => $ticketCreator,
                        'ticket_id' => $ticket->id,
                        'type' => 'agent_assigned',
                        'message' => 'Auto' . ': ' . 'An agent has been automatically assigned to your Ticket',
                    ]
                ];

                // Dispatch Event with Notification Data
                event(new TicketAssigned($notifications));

                // Save Notifications in DB
                Notification::insert($notifications);
            }
        }

        $this->info('Auto-assigned agents to pending tickets.');
    }
}