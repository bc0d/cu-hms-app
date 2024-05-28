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
        Schema::table('room_allocation_req', function (Blueprint $table) {
            $table->string('warden_verification_status')->after('dep_verification_status')->nullable();
            $table->string('allocatedBy')->after('allocation_status')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('room_allocation_req', function (Blueprint $table) {

            $table->dropColumn('warden_verification_status');
            $table->dropColumn('allocatedBy');
        });
    }
};
