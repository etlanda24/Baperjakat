<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSurat3sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('surat3s', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nomor');
            $table->date('tanggal');
            $table->string('nomor_surat');
            $table->string('nomor_keputusan');
            $table->date('tanggal_keputusan');
            $table->date('tanggal_pelantikan');
            $table->date('tanggal_mulai');
            $table->date('tanggal_surat');
            $table->integer('tunjangan');

            $table->integer('id_pegawai_lama')->unsigned();
            $table->integer('id_pegawai_baru')->unsigned();
            
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
        Schema::drop('surat3s');
    }
}
