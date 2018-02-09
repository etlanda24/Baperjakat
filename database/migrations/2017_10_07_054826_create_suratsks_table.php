<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSuratsksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('suratsks', function (Blueprint $table) {
            $table->increments('id');
            $table->date('tanggal_surat');
            $table->string('nomor_surat');
            $table->string('nomor_berita_acara');
            $table->date('tanggal_berita_acara');
            $table->string('nomor_urut');
            $table->integer('id_pegawai')->unsigned();
            $table->string('nama_pegawai');
            $table->string('nip_pegawai');
            $table->string('golongan_pegawai');
            $table->string('jabatan_lama');

            $table->integer('id_jabatan_baru')->unsigned();
            $table->string('jabatan_baru');
            $table->date('tanggal_penetapan');

            $table->integer('id_sekda')->unsigned();
            $table->string('nama_sekda');
            $table->string('nip_sekda');

            $table->integer('id_walikota')->unsigned();
            $table->string('nama_walikota');
            $table->string('nip_walikota');





            $table->foreign('id_pegawai')->references('id')->on('datapegawais')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('id_sekda')->references('id')->on('datapegawais')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('id_walikota')->references('id')->on('datapegawais')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('id_jabatan_baru')->references('id')->on('refjabatans')->onUpdate('cascade')->onDelete('cascade');
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
        Schema::drop('suratsks');
    }
}
