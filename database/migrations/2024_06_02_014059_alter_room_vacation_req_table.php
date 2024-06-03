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
        Schema::table('room_vacation_req', function (Blueprint $table) {
            $table->string('office_status');
            $table->string('warden_status');
            $table->string('hod_status');
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('room_vacation_req', function (Blueprint $table) {

            $table->dropColumn('office_status');
            $table->dropColumn('warden_status');
            $table->dropColumn('hod_status');
        });
    }
};
