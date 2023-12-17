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
        Schema::create('ownership_changes', function (Blueprint $table) {
            $table->id();
            $table->string('userid');
            $table->string('idno');
            $table->string('fname');
            $table->string('address');
            $table->string('contact');
            $table->string('Email');
            $table->timestamps();            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ownership_changes');
    }
};
