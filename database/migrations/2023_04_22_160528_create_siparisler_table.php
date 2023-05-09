<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('siparisler', function (Blueprint $table) {
            $table->id('id');
            $table->foreignId('kullanici_id');
            $table->integer('toplam_tutar');
            $table->integer('urun_sayisi');
            $table->foreignId('kargo_id');
            $table->string('kargo_durumu');
            $table->date('olusturma_zamani');
            $table->string('siparis_no');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('siparisler');
    }
};
