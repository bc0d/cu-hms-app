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

        Schema::create('messJoins', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('student_id');
            $table->foreign('student_id')->references('student_id')->on('students')->onDelete('cascade');
            $table->string('status')->nullable();
            $table->timestamps();
        });


        Schema::create('mess_menu', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('mess_id');
            $table->foreign('mess_id')->references('mess_id')->on('messes')->onDelete('cascade');
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
        Schema::table('messes',function (Blueprint $table) {
            $table->dropForeign(['hostel_id']);
        });

        Schema::table('attendances',function (Blueprint $table) {
            $table->dropForeign(['student_id']);
            $table->dropForeign(['mess_id']);
        });

        Schema::table('messJoins',function (Blueprint $table) {
            $table->dropForeign(['student_id']);
        });

        Schema::table('mess_menu',function (Blueprint $table) {
            $table->dropForeign(['mess_id']);
        });

        Schema::dropIfExists('messes');
        Schema::dropIfExists('attendances');
        Schema::dropIfExists('messJoins');
        Schema::dropIfExists('mess_menu');
    }
};
