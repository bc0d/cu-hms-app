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
        //mens hostel user table
        Schema::create('hostel_mens', function (Blueprint $table) {
            $table->string('student_id')->primary();
            $table->string('f_name');
            $table->string('s_name');
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
            $table->binary('image');
            $table->binary('sign');
            $table->rememberToken();
            $table->timestamps();
        });

        //ladies hostel user table
        Schema::create('hostel_womens', function (Blueprint $table) {
            $table->string('student_id')->primary();
            $table->string('f_name');
            $table->string('s_name');
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
            $table->binary('image');
            $table->binary('sign');
            $table->rememberToken();
            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hostel_mens');

        Schema::dropIfExists('hostel_womens');
    }
};
