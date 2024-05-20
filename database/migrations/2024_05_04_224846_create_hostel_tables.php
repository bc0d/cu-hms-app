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
        Schema::create('hostels', function (Blueprint $table) {
            $table->bigIncrements('hostel_id');
            $table->string('hostel_name');
            $table->string('no_of_blocks');
            $table->timestamps();
        });

        Schema::create('blocks', function (Blueprint $table) {
            $table->bigIncrements('block_id');
            $table->string('block_name');
            $table->unsignedBigInteger('hostel_id');
            $table->foreign('hostel_id')->references('hostel_id')->on('hostels')->onDelete('cascade');
            $table->string('no_of_rooms');
            $table->timestamps();
        });

        Schema::create('rooms', function (Blueprint $table) {
            $table->bigIncrements('room_id');
            $table->unsignedBigInteger('block_id');
            $table->foreign('block_id')->references('block_id')->on('blocks')->onDelete('cascade');
            $table->string('room_name');
            $table->string('room_type');
            $table->string('no_of_beds');
            $table->timestamps();
        });

        Schema::create('beds', function (Blueprint $table) {
            $table->bigIncrements('bed_id');
            $table->unsignedBigInteger('room_id');
            $table->foreign('room_id')->references('room_id')->on('rooms')->onDelete('cascade');
            $table->string('bed_name');
            $table->string('bed_type');
            $table->unsignedBigInteger('student_id');
            $table->foreign('student_id')->references('student_id')->on('students')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        
        Schema::table('blocks', function (Blueprint $table) {
            $table->dropForeign(['hostel_id']);
        });
        
        Schema::table('rooms', function (Blueprint $table) {
            $table->dropForeign(['block_id']);
        });
        
        Schema::table('beds', function (Blueprint $table) {
            $table->dropForeign(['room_id']);
        });
        Schema::dropIfExists('hostels');
        Schema::dropIfExists('blocks');
        Schema::dropIfExists('rooms');
        Schema::dropIfExists('beds');
        
    }
};
