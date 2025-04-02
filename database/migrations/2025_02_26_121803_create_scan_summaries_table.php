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
        Schema::create('scan_summaries', function (Blueprint $table) {
            $table->id();
            $table->integer('seicety_id');
            $table->integer('guard_id');
            $table->date('date');
            $table->tinyInteger('from_00am_to_01am')->default(0);
            $table->tinyInteger('from_01am_to_02am')->default1(0);
            $table->tinyInteger('from_02am_to_03am')->default(0);
            $table->tinyInteger('from_03am_to_04am')->default(0);
            $table->tinyInteger('from_04am_to_05am')->default(0);
            $table->tinyInteger('from_05am_to_06am')->default(0);
            $table->tinyInteger('from_06am_to_07am')->default(0);
            $table->tinyInteger('from_07am_to_08am')->default(0);
            $table->tinyInteger('from_08am_to_09am')->default(0);
            $table->tinyInteger('from_09am_to_10am')->default(0);
            $table->tinyInteger('from_10am_to_11am')->default(0);
            $table->tinyInteger('from_11am_to_12pm')->default(0);
            $table->tinyInteger('from_12pm_to_01pm')->default(0);
            $table->tinyInteger('from_01pm_to_02pm')->default(0);
            $table->tinyInteger('from_02pm_to_03pm')->default(0);
            $table->tinyInteger('from_03pm_to_04pm')->default(0);
            $table->tinyInteger('from_04pm_to_05pm')->default(0);
            $table->tinyInteger('from_05pm_to_06pm')->default(0);
            $table->tinyInteger('from_06pm_to_07pm')->default(0);
            $table->tinyInteger('from_07pm_to_08pm')->default(0);
            $table->tinyInteger('from_08pm_to_09pm')->default(0);
            $table->tinyInteger('from_09pm_to_10pm')->default(0);
            $table->tinyInteger('from_10pm_to_11pm')->default(0);
            $table->tinyInteger('from_11pm_to_12pm')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('scan_summaries');
    }
};
