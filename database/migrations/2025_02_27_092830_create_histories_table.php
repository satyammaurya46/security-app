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
        Schema::create('histories', function (Blueprint $table) {
            $table->id();
            $table->integer('guard_id')->nullable();
            $table->integer('loc_id')->nullable();
            $table->string('loc_name')->nullable(); 
            $table->time('time');
            $table->integer('srno')->nullable();
            $table->string('round_id')->nullable();
            $table->string('round_name')->nullable();
            $table->string('location')->nullable();
            $table->string('checkpoints')->nullable();
            $table->time('start')->nullable(); 
            $table->time('end')->nullable();
            $table->string('code')->nullable();
            $table->integer('society_id');
            $table->string('latitude');
            $table->string('longitude');
            $table->timestamps(); 
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('histories');
    }
};
