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
        Schema::create('guards', function (Blueprint $table) {
            $table->id();
            $table->integer('count_id');    
            $table->string('guard_id')->unique();
            $table->string('society')->nullable();
            $table->string('designation_category')->nullable();
            $table->string('name')->nullable();
            $table->string('email')->nullable();            
            $table->string('number')->nullable();
            $table->string('aadhar_card')->nullable();
            $table->string('pan_card')->nullable();
            $table->string('password')->nullable(); 
            $table->tinyInteger('police_verification')->default(0); 
            $table->tinyInteger('status')->default(0); 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('guards');
    }
};
