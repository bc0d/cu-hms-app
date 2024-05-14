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
        Schema::create('students', function (Blueprint $table) {
            $table->bigIncrements('student_id');//primary key
            $table->string('first_name');
            $table->string('second_name');
            $table->string('gender');
            $table->string('department');
            $table->string('adm_no');
            $table->date('dob');
            $table->string('phone');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('distance');
            $table->string('house');
            $table->string('street');
            $table->string('post');
            $table->string('district');
            $table->string('state');
            $table->string('country');
            $table->string('guardian');
            $table->string('guardian_phone');
            $table->string('pwd');
            $table->string('course_duration');
            $table->date('adm_date');
            $table->string('course_type');
            $table->string('reservation');
            $table->string('image');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};
