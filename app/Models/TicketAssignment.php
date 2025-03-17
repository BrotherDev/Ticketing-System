<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class TicketAssignment extends Model
{
    use HasFactory;

    protected $fillable = ['ticket_id', 'moderator_id', 'agent_id', 'assigned_at', 'reason','notes'];

    public function ticket()
    {
        return $this->belongsTo(Ticket::class);
    }

    public function moderator()
    {
        return $this->belongsTo(User::class);
    }

    public function agent()
    {
        return $this->belongsTo(User::class);
    }
}
