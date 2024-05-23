<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class PinjamMobil extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pinjam_mobil', function (Blueprint $table) {
            $table->increments('id_pinjam')->unique();
            $table->unsignedInteger('id_user');
            $table->unsignedInteger('id_mobil');
            $table->string('nama_user');
            $table->string('nama_mobil');
            $table->dateTime('tanggal_pinjam');
            $table->dateTime('tanggal_kembali');
            $table->timestamps();

            // Add foreign key constraints
            $table->foreign('id_user')->references('id_user')->on('user');
            $table->foreign('id_mobil')->references('id_mobil')->on('mobil');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pinjam_mobil');
    }
}
