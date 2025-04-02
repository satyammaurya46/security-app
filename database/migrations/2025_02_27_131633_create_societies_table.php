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
        Schema::create('societies', function (Blueprint $table) {
            $table->id();
            $table->integer('count_id')->default();
            $table->integer('society_id')->nullable();
            $table->string('society_name')->nullable();
            $table->string('address')->nullable();
            $table->string('user_name')->nullable();
            $table->string('society_type')->nullable();
            $table->string('designation')->nullable();
            $table->string('mobile')->nullable();
            $table->string('email');
            $table->string('password')->nullable();
            $table->string('status')->nullable();
            $table->string('date')->nullable();
            $table->string('login_status')->nullable();
            $table->string('logedin_at')->nullable();
            $table->integer('re_id')->nullable();
            $table->unsignedBigInteger('supervisor_id')->nullable();
            $table->foreign('supervisor_id')->references('id')->on('societies')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('societies',function (Blueprint $table){
            $table->dropForeign(['supervisor_id']);
        });

        Schema::dropIfExists('societies');
    }
};
