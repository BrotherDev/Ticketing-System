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
        Schema::create('tickets', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->foreignId('assigned_agent_id')->nullable()->constrained('users')->onDelete('set null');
            $table->foreignId('assigned_moderator_id')->nullable()->constrained('users')->onDelete('set null');
            $table->string('subject');
            $table->text('problem_details');
            $table->string('image')->nullable();
            $table->string('department');
            $table->enum('status', ['open', 'in_progress', 'resolved', 'closed', 'solved'])->default('open');
            $table->enum('priority', ['critical', 'high', 'medium', 'low'])->default('low');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tickets');
    }
};
