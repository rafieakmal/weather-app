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
        Schema::create('weather', function (Blueprint $table) {
            $table->increments('id');
            $table->string('country');
            $table->string('current_conditions');
            $table->string('pharse_value');
            $table->string('card_first_heading');
            $table->string('suhu_pagi');
            $table->string('suhu_siang');
            $table->string('suhu_sore');
            $table->string('suhu_malam');
            $table->string('aqi');
            $table->string('activity');
            $table->string('card_second_heading');
            $table->string('suhu_hari_ini');
            $table->string('suhu_max');
            $table->string('suhu_min');
            $table->string('kelembapan');
            $table->string('tekanan');
            $table->string('jarak_pandang');
            $table->string('angin');
            $table->string('embun');
            $table->string('indeks_uv');
            $table->string('fase_bulan');
            $table->string('card_third_heading');
            $table->string('jam_sekarang');
            $table->string('suhu_jam_sekarang');
            $table->string('jam_kedua');
            $table->string('suhu_jam_kedua');
            $table->string('jam_ketiga');
            $table->string('suhu_jam_ketiga');
            $table->string('jam_keempat');
            $table->string('suhu_jam_keempat');
            $table->string('jam_terakhir');
            $table->string('suhu_jam_terakhir');
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
        Schema::dropIfExists('weather');
    }
};
