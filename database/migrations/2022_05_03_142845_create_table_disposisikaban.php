<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableDisposisikaban extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('disposisikaban', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_surat')->unsigned();
            $table->integer('id_bidang')->unsigned();
            $table->date('tgl_disposisi');
            $table->text('isi_disposisi');
            $table->string('scan_disposisikaban')->nullable();
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
        Schema::drop('disposisikaban');
    }
}
