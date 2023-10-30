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
        Schema::create('mobile_sawmills', function (Blueprint $table) {
            $table->id();
            $table->string('idno');
            $table->string('RegNoT')->nullable();
            $table->string('RegNotrailer')->nullable();
            $table->binary('CopyReg')->nullable();
            $table->string('MTS')->nullable();
            $table->string('StDate')->nullable();
            $table->string('Vtime')->nullable();
            $table->binary('license')->nullable();
            $table->binary('recomd')->nullable();
        
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mobile_sawmills');
    }
};
