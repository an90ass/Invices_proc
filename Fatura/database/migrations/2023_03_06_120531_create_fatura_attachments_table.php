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
        Schema::create('fatura_attachments', function (Blueprint $table) {
            $table->id();
            $table->string('file_name', 999);
            $table->string('fatura_numarasi', 50);
            $table->string('Tarafindan_yaratildi', 999);
            $table->unsignedBigInteger('fatura_id')->nullable();
            $table->foreign('fatura_id')->references('id')->on('faturalar')->onDelete('cascade');
            $table->timestamps();
        });
    }
     
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('fatura_attachments');
    }
};
