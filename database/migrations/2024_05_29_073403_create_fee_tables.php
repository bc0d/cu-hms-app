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

        Schema::create('monthly_fees', function (Blueprint $table) {
            $table->bigIncrements('monthly_fee_id')->unique();
            $table->string('hostel_id');
            $table->string('room_type');
            $table->string('fee_name');
            $table->decimal('amount', 8, 2);
            $table->timestamps();
        });


        Schema::create('rent_payments', function (Blueprint $table) {
            $table->bigIncrements('rent_payment_id')->unique();
            $table->unsignedBigInteger('monthly_fee_id');
            $table->foreign('monthly_fee_id')->references('monthly_fee_id')->on('monthly_fees')->onDelete('cascade');
            $table->unsignedBigInteger('student_id');
            $table->foreign('student_id')->references('student_id')->on('students')->onDelete('cascade');
            $table->string('month_of_fee');
            $table->string('paid_status');
            $table->date('month_of_payment')->nullable();
            $table->string('transaction_id')->nullable();
            $table->timestamps();
        });

        Schema::create('water_electricity_payments', function (Blueprint $table) {
            $table->bigIncrements('water_electricity_payment_id')->unique();
            $table->unsignedBigInteger('monthly_fee_id');
            $table->foreign('monthly_fee_id')->references('monthly_fee_id')->on('monthly_fees')->onDelete('cascade');
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
        Schema::table('rent_payments', function (Blueprint $table) {
            $table->dropForeign(['monthly_fee_id']);
            $table->dropForeign(['student_id']);
        });

        Schema::table('water_electricity_payments', function (Blueprint $table) {
            $table->dropForeign(['monthly_fee_id']);
            $table->dropForeign(['student_id']);
        });
       
        Schema::dropIfExists('fee_payments');
        Schema::dropIfExists('monthly_fees');
    }
};
