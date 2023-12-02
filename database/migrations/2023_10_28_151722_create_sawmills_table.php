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
        Schema::create('sawmills', function (Blueprint $table) {
            $table->id();
            $table->string('idno');
            $table->string('wsadd')->nullable();;
            $table->string('nland')->nullable();;
            $table->string('ownerofland')->nullable();;
            $table->string('deed')->nullable();;
            $table->string('plan')->nullable();;
            $table->string('Confirm')->nullable();;
            $table->string('nameofwshed')->nullable();;
            $table->string('district')->nullable();;
            $table->string('DSsection')->nullable();;
            $table->string('gnKottasaya')->nullable();;
            $table->string('Lgovernment')->nullable();;
            $table->string('recom')->nullable();;
            $table->string('nature_value')->nullable();;
        
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sawmills');
    }
};
