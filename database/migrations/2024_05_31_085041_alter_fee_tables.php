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
            $table->string('amount');
        });

        Schema::table('waterelectric_bills', function (Blueprint $table) {
            $table->string('amount');
            $table->renameColumn('month_of_payment', 'payment_date');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('room_rents', function (Blueprint $table) {

            $table->dropColumn('amount');
        });
        Schema::table('waterelectric_bills', function (Blueprint $table) {

            $table->dropColumn('amount');
            $table->renameColumn('payment_date', 'month_of_payment');
        });
    }
};
