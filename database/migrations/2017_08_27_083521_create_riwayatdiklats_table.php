<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRiwayatdiklatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('riwayatdiklats', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_user')->unsigned();
            $table->string('nama');
            $table->string('jenis_diklat');
            $table->string('nama_diklat');
            $table->string('tempat_diklat');
            $table->string('penyelenggara_diklat');
            $table->string('angkatan');
            $table->date('tanggal_mulai');
            $table->date('tanggal_selesai');
            $table->string('jumlah_jam');
            $table->string('nomor_sttp');
            $table->date('tanggal_sttp');
            $table->string('periode');
            $table->timestamps();
            $table->foreign('id_user')->references('id')->on('datapegawais')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('riwayatdiklats');
    }
}
