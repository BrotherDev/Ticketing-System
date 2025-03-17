<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('ticket_assignments', function (Blueprint $table) {
            $table->id();
            $table->foreignId('ticket_id')->constrained()->onDelete('cascade');
            $table->foreignId('moderator_id')->constrained('users'); // Assuming users table contains moderators
            $table->foreignId('agent_id')->constrained('users'); // Assuming agents are also in the users table
            $table->timestamp('assigned_at')->useCurrent();
            $table->text('reason')->nullable(); // Add reason for assigning the agent
            $table->text('notes')->nullable();  // Add additional notes, if necessary
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ticket_assignments');
    }
};
