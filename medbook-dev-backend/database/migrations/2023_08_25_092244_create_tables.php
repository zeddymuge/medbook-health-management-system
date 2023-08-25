<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('tbl_gender', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->timestamps();
        });
    
        Schema::create('tbl_patient', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->foreignId('gender_id')->constrained('tbl_gender');
            $table->timestamps();
        });
    
        Schema::create('tbl_service', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->timestamps();
        });
    
        Schema::create('tbl_patient_services', function (Blueprint $table) {
            $table->id();
            $table->foreignId('patient_id')->constrained('tbl_patient');
            $table->foreignId('service_id')->constrained('tbl_service');
            $table->timestamps();
        });
    }
    
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tables');
    }
};
