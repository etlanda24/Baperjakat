<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSurat1sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('surat1s', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nomor');
            $table->date('tanggal');
            $table->string('nomor_surat');
            $table->string('nomor_keputusan');
            $table->date('tanggal_keputusan');
            $table->date('tanggal_pelantikan');
            $table->date('tanggal_surat');

            $table->integer('id_pegawai_lama')->unsigned();
            // $table->string('nip_pegawai_lama');
            // $table->string('pangkat_pegawai_lama');

            // $table->integer('id_jabatan_pegawai_lama')->unsigned();
            // $table->string('jabatan_pegawai_lama');
            // $table->string('unit_pegawai_lama');
            // $table->string('instansi_pegawai_lama');

            $table->integer('id_pegawai_baru')->unsigned();
            // $table->string('nip_pegawai_baru');
            // $table->string('pangkat_pegawai_baru');

            // $table->integer('id_jabatan_pegawai_baru')->unsigned();
            // $table->string('jabatan_pegawai_baru');
            // $table->string('unit_pegawai_baru');
            // $table->string('instansi_pegawai_baru');
            $table->foreign('id_pegawai_lama')->references('id')->on('datapegawais')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('id_pegawai_baru')->references('id')->on('datapegawais')->onUpdate('cascade')->onDelete('cascade');
            
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
        Schema::drop('surat1s');
    }
}
