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
        Schema::create('settings', function (Blueprint $table) {
            $table->integer('id')->autoIncrement();
            $table->string('ad');
            $table->string('keywords')->nullable();
            $table->string('aciklama')->nullable();
            $table->string('sirket')->nullable();
            $table->string('adres')->nullable();
            $table->string('telefon')->nullable();
            $table->string('fax')->nullable();
            $table->string('email')->nullable();
            $table->string('smtpserver')->nullable();
            $table->string('smtpemail')->nullable();
            $table->string('smtpsifre')->nullable();
            $table->string('smtpport')->nullable()->default(0);
            $table->string('facebook')->nullable();
            $table->string('instagram')->nullable();
            $table->string('twitter')->nullable();
            $table->string('youtube')->nullable();
            $table->text('hakkimizda')->nullable();
            $table->text('contact')->nullable();
            $table->text('referanslar')->nullable();
            $table->string('ikon')->nullable();

            $table->string('durum',5)->nullable()->default('false');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('settings');
    }
};
