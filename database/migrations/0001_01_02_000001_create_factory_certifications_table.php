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
        Schema::create('factory_certifications', function (Blueprint $table) {
            $table->id();
            $table->string('company_id')->nullable();
            $table->string('factory_certification')->required();
            $table->string('factory_certification_name')->required();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('factory_certifications');
    }
};
