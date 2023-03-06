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
         Schema::create('faturalar', function (Blueprint $table) {
        $table->bigIncrements('id');
        $table->string('fatura_numarasi');
        $table->date('fatura_Tarihi');
        $table->date('due_Tarihi');
        $table->string('urun');
        $table->string('bolum');
        $table->string('indirim');
        $table->string('rate_vat');
        $table->decimal('value_vat',8,2);//Sekiz basamak ve virgülden sonra iki basamak kabul eder.
        $table->decimal('Toplam',8,2);
        $table->string('Durum', 50);
        $table->integer('value_durumu');
        $table->text('note')->nullable();
        $table->string('kullanci');
        $table->softDeletes();
        $table->timestamps();
    });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('faturalar');
    }
};

