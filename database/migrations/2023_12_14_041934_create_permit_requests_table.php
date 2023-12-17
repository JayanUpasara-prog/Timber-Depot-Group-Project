<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePermitRequestsTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        {
            Schema::create('permit_requests', function (Blueprint $table) {
                $table->id();
                $table->string('national_id_number');
                $table->string('contact_number');
                $table->string('email');
                $table->string('traveling_date');
                $table->string('traveling_distance')->nullable();
                $table->string('receiver_address')->nullable();
                $table->string('vehicle_number')->nullable();
                $table->string('timber_type')->nullable();
                $table->string('length')->nullable();
                $table->string('width')->nullable();
                $table->string('thickness')->nullable();
                $table->string('count')->nullable();
                $table->timestamps();
            });
        }
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('permit_requests');
    }
};
