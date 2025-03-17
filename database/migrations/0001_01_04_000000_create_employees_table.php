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
        Schema::create('employees', function (Blueprint $table) {
            $table->id(); // Primary key
            $table->unsignedBigInteger('companies_id');
            $table->unsignedBigInteger('job_designations_id');
            $table->string('card_no')->unique();
            $table->string('barcod_no')->nullable();
            $table->date('joining_date');
            $table->string('section')->nullable();
            $table->string('shift')->nullable();
            $table->string('grade')->nullable();
            $table->string('weekend')->nullable();
            $table->string('floor')->nullable();
            $table->string('gross_salary')->nullable();
            $table->string('name');
            $table->string('number')->unique();
            $table->string('email')->unique()->nullable();
            $table->string('nid')->unique()->nullable();
            $table->string('birth_certificate')->unique()->nullable();
            $table->string('tin_number')->unique()->nullable();
            $table->date('birth_date');
            $table->string('gender');
            $table->string('blood_group')->nullable();
            $table->string('religion')->nullable();
            $table->string('marital_status')->nullable();
            $table->string('present_division')->nullable();
            $table->string('present_district')->nullable();
            $table->string('present_thana')->nullable();
            $table->string('fathers_name')->nullable();
            $table->string('mothers_name')->nullable();
            $table->string('spouse_name')->nullable();
            $table->string('husband_name')->nullable();
            $table->string('fathers_nid')->nullable();
            $table->string('fathers_number')->nullable();
            $table->string('husband_nid')->nullable();
            $table->string('husband_number')->nullable();
            $table->foreign('companies_id')->references('id')->on('companies')->onDelete('cascade');
            $table->foreign('job_designations_id')->references('id')->on('job_designations')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employees');
    }
};
