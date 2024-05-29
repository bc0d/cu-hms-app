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
            $table->bigINcrements('monthly_fee_id')->unique();
            $table->string('hostel_id');
            $table->string('room_type');
            $table->decimal('rent', 8, 2);
            $table->decimal('water_bill', 8, 2);
            $table->decimal('electricity_bill', 8, 2);
            $table->timestamps();
        });


        Schema::create('fee_payments', function (Blueprint $table) {
            $table->bigIncrement('payment_id')->unique();
            $table->foreignId('fee_structure_id')->constrained('fee_structures')->onDelete('cascade');
            $table->foreignId('student_id')->constrained('students')->onDelete('cascade');
            $table->string('month_of_fee');
            $table->boolean('paid');
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
        Schema::table('fee_payments', function (Blueprint $table) {
            $table->dropForeign(['fee_structure_id'],['student_id']);
        });
       
        Schema::dropIfExists('fee_payments');
        Schema::dropIfExists('monthly_fees');
    }
};
