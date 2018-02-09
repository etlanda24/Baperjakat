<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRiwayatpendidikansTable extends Migration
{
    /**
     * Run the migrations.
     *
 * @return void
     */
    public function up()
    {
        Schema::create('riwayatpendidikans', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_pegawai')->unsigned();
            $table->string('nip_pegawai');
            $table->string('nama_pegawai');
            $table->string('tingkat_pendidikan');
            $table->string('nama_lembaga');
            $table->string('fakultas')->nulable();
            $table->integer('id_jurusan')->unsigned();
            $table->string('jurusan');
            $table->text('alamat');
            $table->string('provinsi');
            $table->string('kota');
            $table->string('rektor');
            $table->string('no_ijazah');
            $table->date('tgl_ijazah');

            $table->timestamps();

            $table->foreign('id_pegawai')->references('id')->on('datapegawais')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('id_jurusan')->references('id')->on('refpendidikans')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('riwayatpendidikans');
    }
}
