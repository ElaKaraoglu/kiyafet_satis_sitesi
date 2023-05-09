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
        Schema::create('siparis_detaylari', function (Blueprint $table) {
            $table->id('id');
            $table->foreignId('siparis_id');
            $table->integer('tutar');
            $table->integer('urun_adedi');
            $table->foreignId('urun_id');
         
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('siparis_detaylari');
    }
};
