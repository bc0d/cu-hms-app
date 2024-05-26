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
        Schema::create('departments', function (Blueprint $table) {
            $table->bigIncrements('department_id')->unique();
            $table->string('department_name');
            $table->unsignedBigInteger('hod');
            $table->foreign('hod')->references('admin_id')->on('admins')->onDelete('cascade');
            $table->string('section_officer');
            $table->string('contact_no');
            $table->timestamps();
        });

        Schema::create('courses',function (Blueprint $table) {
            $table->bigIncrements('course_id')->unique();
            $table->string('course_name');
            $table->unsignedBigInteger('department_id');
            $table->foreign('department_id')->references('department_id')->on('departments')->onDelete('cascade');
            $table->string('course_type');
            $table->string('course_duration');
            $table->timestamps();
        });

        Schema::create('complaints',function (Blueprint $table) {
            $table->bigIncrements('complaint_id')->unique();
            $table->unsignedBigInteger('student_id');
            $table->foreign('student_id')->references('student_id')->on('students')->onDelete('cascade');
            $table->string('category');
            $table->text('complaint');
            $table->string('status');
            $table->unsignedBigInteger('closedby')->nullable();
            $table->foreign('closedby')->references('admin_id')->on('admins')->onDelete('cascade');
            $table->text('comment')->nullable();
            $table->timestamps();
        });

        Schema::create('rules',function (Blueprint $table) {
            $table->bigIncrements('rule_id')->unique();
            $table->string('title');
            $table->text('description');
            $table->unsignedBigInteger('updatedby');
            $table->foreign('updatedby')->references('admin_id')->on('admins')->onDelete('cascade');
            $table->timestamps();
        });

        Schema::create('notice', function (Blueprint $table) {
            $table->bigIncrements('notice_id')->unique();
            $table->string('title');
            $table->unsignedBigInteger('publishedby');
            $table->foreign('publishedby')->references('admin_id')->on('admins')->onDelete('cascade');
            $table->string('path');
            $table->timestamps();
        });

        Schema::create('feedback', function (Blueprint $table) {
            $table->bigIncrements('feedback_id')->unique();
            $table->unsignedBigInteger('student_id');
            $table->foreign('student_id')->references('student_id')->on('students')->onDelete('cascade');
            $table->text('review');
            $table->timestamps();
        });

        Schema::create('room_allocation_req',function (Blueprint $table) {
            $table->bigIncrements('allocate_req_id')->unique();
            $table->unsignedBigInteger('student_id');
            $table->foreign('student_id')->references('student_id')->on('students')->onDelete('cascade');
            $table->unsignedBigInteger('department_id');
            $table->foreign('department_id')->references('department_id')->on('departments')->onDelete('cascade');
            $table->string('dep_verification_status');
            $table->string('payment_status');
            $table->string('allocation_status');
            $table->timestamps();
        });

        Schema::create('room_vacation_req',function (Blueprint $table) {
            $table->bigIncrements('vacate_req_id')->unique();
            $table->unsignedBigInteger('student_id');
            $table->foreign('student_id')->references('student_id')->on('students')->onDelete('cascade');
            $table->unsignedBigInteger('department_id');
            $table->foreign('department_id')->references('department_id')->on('departments')->onDelete('cascade');
            $table->string('payment_status');
            $table->string('vacate_status');
            $table->timestamps();
        });


         

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('room_vacation_req',function (Blueprint $table) {
            $table->dropForeign(['student_id']);
            $table->dropForeign(['department_id']);
        });

        Schema::table('room_allocation_req',function (Blueprint $table) {
            $table->dropForeign(['student_id']);
            $table->dropForeign(['department_id']);
        });

        Schema::table('feedback',function (Blueprint $table) {
            $table->dropForeign(['student_id']);
        });

        Schema::table('notice',function (Blueprint $table) {
            $table->dropForeign(['publishedby']);
        });

        Schema::table('rules',function (Blueprint $table) {
            $table->dropForeign(['updatedby']);
        });

        Schema::table('complaints',function (Blueprint $table) {
            $table->dropForeign(['student_id']);
            $table->dropForeign(['closedby']);
        });

        Schema::table('courses',function (Blueprint $table) {
            $table->dropForeign(['department_id']);

        });

        Schema::table('departments',function (Blueprint $table) {
            $table->dropForeign(['hod']);

        });

        
        Schema::dropIfExists('courses');
        Schema::dropIfExists('complaints');
        Schema::dropIfExists('rules');
        Schema::dropIfExists('notice');
        Schema::dropIfExists('feedback');
        Schema::dropIfExists('room_allocation_req');
        Schema::dropIfExists('room_vacation_req');
        Schema::dropIfExists('departments');
    }
};
