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
        Schema::create('notifications', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade'); // Recipient of the notification
            $table->foreignId('ticket_id')->nullable()->constrained()->onDelete('cascade'); // Related ticket
            $table->enum('type', ['ticket_created', 'agent_assigned', 'status_changed', 'ticket_replied', 'user_replied']); // Type of notification
            $table->text('message'); // Notification message
            $table->boolean('is_read')->default(false); // Read status
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('notifications');
    }
};
