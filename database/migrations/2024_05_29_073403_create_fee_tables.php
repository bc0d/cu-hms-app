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

        Schema::create('fees', function (Blueprint $table) {
            $table->bigIncrements('fee_id')->unique();
            $table->unsignedBigInteger('hostel_id');
            $table->foreign('hostel_id')->references('hostel_id')->on('hostels')->onDelete('cascade');
            $table->string('room_type');
            $table->string('fee_name');
            $table->decimal('amount', 8, 2);
            $table->unsignedBigInteger('updatedby');
            $table->foreign('updatedby')->references('admin_id')->on('admins')->onDelete('cascade');
            $table->timestamps();
        });


        Schema::create('room_rents', function (Blueprint $table) {
            $table->bigIncrements('room_rent_id')->unique();
            $table->unsignedBigInteger('fee_id');
            $table->foreign('fee_id')->references('fee_id')->on('fees')->onDelete('cascade');
            $table->unsignedBigInteger('student_id');
            $table->foreign('student_id')->references('student_id')->on('students')->onDelete('cascade');
            $table->string('month_of_fee');
            $table->string('paid_status');
            $table->date('payment_date')->nullable();
            $table->string('transaction_id')->nullable();
            $table->timestamps();
        });

        Schema::create('waterelectric_bills', function (Blueprint $table) {
            $table->bigIncrements('waterelectric_bills_id')->unique();
            $table->unsignedBigInteger('fee_id');
            $table->foreign('fee_id')->references('fee_id')->on('fees')->onDelete('cascade');
            $table->unsignedBigInteger('student_id');
            $table->foreign('student_id')->references('student_id')->on('students')->onDelete('cascade');
            $table->string('month_of_fee');
            $table->string('paid_status');
            $table->date('month_of_payment')->nullable();
            $table->string('transaction_id')->nullable();
            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('waterelectric_bills', function (Blueprint $table) {
            $table->dropForeign(['fee_id']);
            $table->dropForeign(['student_id']);
        });

        Schema::table('room_rents', function (Blueprint $table) {
            $table->dropForeign(['fee_id']);
            $table->dropForeign(['student_id']);
        });

        Schema::table('fees', function (Blueprint $table) {
            $table->dropForeign(['hostel_id']);
            $table->dropForeign(['updatedby']);
        });
       
        Schema::dropIfExists('waterelectric_bills');
        Schema::dropIfExists('room_rents');
        Schema::dropIfExists('fees');
    }
};
