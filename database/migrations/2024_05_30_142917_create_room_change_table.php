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
        Schema::create('room_change', function (Blueprint $table) {
            $table->bigIncrements('roomchange_id');
            $table->unsignedBigInteger('student_id');
            $table->unsignedBigInteger('current_room');
            $table->string('request');
            $table->string('reason');
            $table->string('status');
            $table->unsignedBigInteger('updatedby')->nullable();
            $table->timestamps();
            $table->foreign('student_id')->references('student_id')->on('students')->onDelete('cascade');
            $table->foreign('current_room')->references('room_id')->on('rooms')->onDelete('cascade');
            $table->foreign('updatedby')->references('admin_id')->on('admins')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('room_change', function (Blueprint $table) {
            $table->dropForeign(['student_id']);
            $table->dropForeign(['current_room']);
            $table->dropForeign(['updatedby']);
        });
        
        Schema::dropIfExists('room_change');
    }
};
