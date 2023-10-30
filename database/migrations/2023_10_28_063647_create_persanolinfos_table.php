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
        Schema::create('persanolinfos', function (Blueprint $table) {
            $table->string('idno');
            $table->string('fname');
            $table->string('address');
            $table->binary('fnic');
            $table->binary('bnic');
            $table->string('contact');
            $table->string('email');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('persanolinfos');
    }
};
