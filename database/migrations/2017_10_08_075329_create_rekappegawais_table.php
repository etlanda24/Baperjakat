<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRekappegawaisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rekappegawais', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nip_pegawai');
            $table->string('nama');
            $table->integer('id_jabatan')->unsigned();
            $table->string('jabatan');
            $table->string('jenis_kelamin');
            $table->string('tempat_lahir');
            $table->date('tanggal_lahir');
            $table->string('status_pegawai');
            $table->string('agama');
            $table->string('alamat');
            $table->string('no_telfon');
            $table->integer('tunjangan');
            $table->integer('id_referensi_golongan')->unsigned();
            $table->string('golongan');
            $table->date('tmt_jabatan');
            $table->date('tgl_pertek');
            $table->string('no_sk');
            $table->date('tanggal_sk');
            $table->string('periode');
            $table->timestamps();
            
            $table->foreign('id_jabatan')->references('id')->on('refjabatans')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('id_referensi_golongan')->references('id')->on('refgolongans')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('rekappegawais');
    }
}
