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
        Schema::create('companies', function (Blueprint $table) {
            $table->id();
            $table->string('company_name')->required();
            $table->string('bgmea_reg_no')->required();
            $table->string('epb_reg_no')->nullable();
            $table->string('name')->nullable();
            $table->string('number')->nullable();
            $table->string('email')->nullable();
            $table->string('mailling_address')->nullable();
            $table->string('office_address')->nullable();
            $table->string('office_number')->nullable();
            $table->string('fax_number')->nullable();
            $table->string('office_email')->nullable();
            $table->string('office_number_one')->nullable();
            $table->string('office_number_two')->nullable();
            $table->string('fax_number_two')->nullable();
            $table->string('website')->nullable();
            $table->string('factory_address')->nullable();
            $table->date('establishment')->nullable();
            $table->integer('management_employees')->nullable();
            $table->integer('male_employees')->nullable();
            $table->integer('female_employees')->nullable();
            $table->integer('total_employees')->nullable();
            $table->integer('total_machines')->nullable();
            $table->string('factory_email')->nullable();
            $table->string('production_capacity')->nullable();
            $table->string('annual_turnover_year')->nullable();
            $table->string('annual_turnover')->nullable();
            $table->string('company_logo')->nullable();
            $table->foreignId('factory_zones_id')->nullable()->constrained('factory_zones')->onDelete('cascade');
            $table->foreignId('job_designations_id')->nullable()->constrained('job_designations')->onDelete('cascade');
            $table->foreignId('users_id')->nullable()->constrained('admins')->onDelete('cascade');
            $table->foreignId('admins_id')->nullable()->constrained('admins')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('companies');
    }
};
