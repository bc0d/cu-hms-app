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
        Schema::table('room_rents', function (Blueprint $table) {
            // Raw SQL to change the column type
            $table->timestamp('payment_date')->nullable()->useCurrent()->change();
        });

        Schema::table('waterelectric_bills', function (Blueprint $table) {
            // Raw SQL to change the column type
            $table->timestamp('payment_date')->nullable()->useCurrent()->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('room_rents', function (Blueprint $table) {
            // Revert the column type to its original type if needed
            $table->date('payment_date')->nullable()->change(); // Adjust based on original type
        });

        Schema::table('waterelectric_bills', function (Blueprint $table) {
            // Revert the column type to its original type if needed
            $table->date('payment_date')->nullable()->change(); // Adjust based on original type
        });
    }
};
