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
        Schema::create('employee_histories', function (Blueprint $table) {
            $table->id();
            $table->string('incident_type');
            $table->date('incident_date');
            $table->text('incident_description')->nullable();
            $table->text('incident_description_file')->nullable();
            $table->string('reported_by')->nullable();
            $table->string('investigation_office')->nullable();
            $table->text('investigation_summary')->nullable();
            $table->string('incident_prove_photo')->nullable();
            $table->enum('action_taken', ['warning', 'suspension', 'termination', 'training', 'no action'])->default('no action');
            $table->string('action_taken_by')->nullable();
            $table->date('action_date')->nullable();
            $table->text('notes')->nullable();
            $table->foreignId('employees_id')->constrained()->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employee_histories');
    }
};
