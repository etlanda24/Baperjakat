<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLaporansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('laporans', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_user')->unsigned();
            $table->string('nama');
            $table->string('jenis_tempat_bekerja');
            $table->string('jenis_jabatan');
            $table->string('unit_kerja');
            $table->integer('id_jabatan')->unsigned();
            $table->string('jabatan');
            $table->string('mata_pelajaran');
            $table->string('no_sk');
            $table->string('tanggal_sk');
            $table->string('pejabat_penetap');
            $table->string('tmt_jabatan');
            $table->timestamps();
            $table->foreign('id_user')->references('id')->on('datapegawais')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('id_jabatan')->references('id')->on('dataskpds')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('laporans');
    }
}
