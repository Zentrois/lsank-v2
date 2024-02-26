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
        Schema::create('borang', function (Blueprint $table) {
           
            $table->id();
            $table->json('borang_a');
            $table->json('borang_b');
            $table->json('borang_c');
            $table->json('borang_d');
            $table->json('borang_e');
            $table->json('borang_r');
            $table->json('borang_g');
            $table->json('borang_h');
            $table->json('borang_i');
            $table->json('file_upload');
            $table->timestamps();

           
 
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('borang');
    }
};
