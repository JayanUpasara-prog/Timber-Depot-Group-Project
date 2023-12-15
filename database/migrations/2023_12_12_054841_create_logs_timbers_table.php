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
        Schema::create('logs_timbers', function (Blueprint $table) {
            $table->id();
            // $table->date('date');
            // $table->String('species');
            // $table->integer('numlogs1');
            // $table->integer('volume1');
            // $table->integer('numlogs2');
            // $table->integer('volume2');
            // $table->text('sourceoflogs');
            // $table->integer('numlogs3');
            // $table->integer('volume3');
            // $table->integer('numlogs4');
            // $table->integer('volume4');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('logs_timbers');
    }
};
