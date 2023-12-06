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
        Schema::create('assing_diagnostics', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('patient'); 
            $table->foreign('patient')->references('id')->on('patients');
            $table->unsignedBigInteger('diagnostic');
            $table->foreign('diagnostic')->references('id')->on('diagnostics');
            $table->string('observation',255);
            $table->string('creation',255);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::drop('assing_diagnostics');
    }
};
