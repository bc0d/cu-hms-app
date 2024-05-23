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
        Schema::create('messes', function (Blueprint $table) {
            $table->bigIncrements('mess_id');
            $table->unsignedBigInteger('hostel_id');
            $table->foreign('hostel_id')->references('hostel_id')->on('hostels')->onDelete('cascade');
            $table->string('mess_name');
            $table->timestamps();
        });


        Schema::create('attendances', function (Blueprint $table) {
            $table->bigIncrements('attendance_id');
            $table->date('mess_date');
            $table->unsignedBigInteger('student_id');
            $table->foreign('student_id')->references('student_id')->on('students')->onDelete('cascade');
            $table->unsignedBigInteger('mess_id');
            $table->foreign('mess_id')->references('mess_id')->on('messes')->onDelete('cascade');
            $table->string('status');
            $table->string('meal_time');
            $table->timestamps();
        });


        Schema::create('mess_menu', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('hostel_id');
            $table->bigInteger('mess_id');
            $table->string('weekday');
            $table->string('breakfast');
            $table->string('lunch');
            $table->string('eve')->nullable();
            $table->string('dinner');
            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mess_tables');
    }
};
