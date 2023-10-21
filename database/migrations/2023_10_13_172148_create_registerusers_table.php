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
        //create table for user registration form
        Schema::create('registerusers', function (Blueprint $table) {
            
            $table->string('idno')->primary();
            $table->string('fname');
            // $table->string('address');
            
            // $table->binary('fnic');
            // $table->binary('bnic');
            // $table->string('contact');
            // $table->string('MTsawmill');
            // $table->string('sawmill');
            // $table->string('TSOutlet');
            // $table->string('seasoning');
            // $table->string('Cshed');
            // $table->string('furniture');
            // $table->string('FWshed');
            // $table->string('wsadd');
            // $table->string('nland');
            // $table->string('ownerofland');
            // $table->binary('deed');
            // $table->binary('plan');
            // $table->binary('Confirm');
            // $table->string('nameofwshed');
            // $table->string('district');
            // $table->string('DSsection');
            // $table->string('gnKottasaya');
            // $table->string('Lgovernment');
            // $table->binary('recom');
            // $table->string('RegNoT');
            // $table->string('RegNotrailer');
            // $table->binary('CopyReg');
            // $table->string('MTS');
            // $table->date('StDate');
            // $table->string('Vtime');
            // $table->binary('license');
            // $table->binary('recomd');
            // $table->string('payment');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('registerusers');
    }
};
