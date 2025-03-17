<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Ticket extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id', 
        'agent_id', 
        'assigned_moderator_id', 
        'assigned_agent_id', 
        'subject', 
        'problem_details', 
        'image', 
        'status', 
        'department',
        'priority',

    ];

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function agent() {
        return $this->belongsTo(User::class, 'agent_id');
    }

    public function replies() {
        return $this->hasMany(Reply::class);
    }

    public function assignedAgent()
    {
        return $this->belongsTo(User::class, 'assigned_agent_id');
    }

    public function assignments()
    {
        return $this->hasMany(TicketAssignment::class);
    }

}
