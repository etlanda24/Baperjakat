<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMutasisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mutasis', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_pegawai')->unsigned();
            $table->string('nip_pegawai');
            $table->string('nama_pegawai');
            $table->integer('id_jabatan_lama')->unsigned();
            $table->string('nama_jabatan_lama');
            $table->string('no_sk_lama');
            $table->string('tanggal_sk_lama');
            $table->string('tmt_jabatan_lama');
            $table->string('golongan_lama');
            $table->string('instansi_lama');



            $table->integer('id_jabatan_baru')->unsigned();
            $table->string('nama_jabatan_baru');
            $table->string('no_sk_baru');
            $table->string('tanggal_sk_baru');
            $table->string('tmt_jabatan_baru');
            $table->string('golongan_baru');
            $table->string('instansi_baru');
            $table->timestamps();
            $table->foreign('id_pegawai')->references('id')->on('datapegawais')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('id_jabatan_lama')->references('id')->on('refjabatans')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('id_jabatan_baru')->references('id')->on('refjabatans')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('mutasis');
    }
}
