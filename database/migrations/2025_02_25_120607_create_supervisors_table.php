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
        Schema::create('supervisors', function (Blueprint $table) {
            $table->id();
            $table->integer('count_id');
            $table->string('supervisor_code');            
            $table->string('name')->nullable();
            $table->string('mobile')->nullable();
            $table->string('email')->nullable();
            $table->string('address')->nullable();
            $table->string('aadharcard')->nullable();
            $table->string('aadharcard_back')->nullable();
            $table->string('pancard')->nullable();
            $table->string('password')->nullable();
            $table->string('status')->nullable();
            $table->date('date')->nullable();
            $table->string('login_status')->nullable();
            $table->timestamp('loggedin_at')->nullable();
            $table->integer('society_id')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('supervisors');
    }
};
