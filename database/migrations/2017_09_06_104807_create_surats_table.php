<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSuratsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('surats', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_pengirim')->unsigned();
            $table->string('nama_pengirim');
            $table->integer('id_penerima')->unsigned();
            $table->string('nama_penerima');
            $table->string('jenis_surat');
            $table->date('tanggal_surat');
            $table->timestamps();
            $table->foreign('id_pengirim')->references('id')->on('datapegawais')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('id_penerima')->references('id')->on('datapegawais')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('surats');
    }
}
