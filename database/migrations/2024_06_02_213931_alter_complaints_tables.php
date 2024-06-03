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
        Schema::table('complaints', function (Blueprint $table) {
            $table->unsignedBigInteger('hostel_id')->nullable();
            $table->foreign('hostel_id')->references('hostel_id')->on('hostels')->onDelete('cascade');
        });
        Schema::table('feedback', function (Blueprint $table) {
            $table->unsignedBigInteger('hostel_id')->nullable();
            $table->foreign('hostel_id')->references('hostel_id')->on('hostels')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('complaints', function (Blueprint $table) {
            $table->dropForeign(['hostel_id']);
            $table->dropColumn('hostel_id');
        });
        Schema::table('feedback', function (Blueprint $table) {
            $table->dropForeign(['hostel_id']);
            $table->dropColumn('hostel_id');
        });
    }
};
