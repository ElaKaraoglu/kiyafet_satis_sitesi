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
        Schema::create('kullanicilar', function (Blueprint $table) {
            $table->integer('kullanici_id')->primary();
            $table->string('ad');
            $table->string('soyad');
            $table->string('email');
            $table->string('telefon');
            $table->Integer('bakiye',);
            $table->date('dogum_tarihi');
            $table->date('olusturma_zamani');
            $table->date('guncelleme_zamani');
            $table->longText('adres');

            $table->foreignId('kullanici_tipi_id')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kullanicilar');
    }
};
