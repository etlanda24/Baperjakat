<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRiwayatjabatansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('riwayatjabatans', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_user')->unsigned();
            $table->string('nama');
            $table->string('nip_pegawai');
            $table->string('jenis_tempat_bekerja');
            $table->string('jenis_jabatan');
            $table->string('unit_kerja');
            $table->integer('id_jabatan')->unsigned();
            $table->string('jabatan');
            $table->string('mata_pelajaran');
            $table->string('no_sk');
            $table->date('tanggal_sk');
            $table->string('pejabat_penetap');
            $table->date('tmt_jabatan');
            $table->string('periode');
            $table->timestamps();
            $table->foreign('id_user')->references('id')->on('datapegawais')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('id_jabatan')->references('id')->on('refjabatans')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('riwayatjabatans');
    }
}
