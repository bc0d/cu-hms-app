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
        Schema::create('request_admins', function (Blueprint $table) {
            $table->bigIncrements('request_admin_id');
            $table->unsignedBigInteger('admin_id');
            $table->foreign('admin_id')->references('admin_id')->on('admins')->onDelete('cascade');             
            $table->string('title');
            $table->string('category');
            $table->text('message'); 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {

        Schema::table('request_admins', function (Blueprint $table) {
            $table->dropForeign(['admin_id']);
        });

        Schema::dropIfExists('request_admins');
    }
};
