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
            $table->string('wsadd');
            $table->string('nland');
            $table->string('ownerofland');
            $table->binary('deed');
            $table->binary('plan');
            $table->binary('Confirm');
            $table->string('nameofwshed');
            $table->string('district');
            $table->string('DSsection');
            $table->string('gnKottasaya');
            $table->string('Lgovernment');
            $table->binary('recom');
            $table->boolean('sawmill')->default(0);
            $table->boolean('TSOutlet')->default(0);
            $table->boolean('seasoning')->default(0);
            $table->boolean('Cshed')->default(0);
            $table->boolean('furniture')->default(0);
            $table->boolean('FWshed')->default(0);
        
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
