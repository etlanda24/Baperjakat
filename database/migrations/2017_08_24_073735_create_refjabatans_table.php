<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRefjabatansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('refjabatans', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_instansi')->unsigned();
            $table->string('nama_instansi');
            $table->string('nama');
            $table->string('eselon');
            $table->string('unit');
            $table->timestamps();
            $table->foreign('id_instansi')->references('id')->on('dataskpds')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('refjabatans');
    }
}
