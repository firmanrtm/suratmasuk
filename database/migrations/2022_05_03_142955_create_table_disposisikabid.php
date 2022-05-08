<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableDisposisikabid extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('disposisikabid', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_surat')->unsigned();
            $table->integer('id_subbidang')->unsigned();
            $table->date('tgl_disposisi');
            $table->text('isi_disposisi');
            $table->string('scan_disposisikabid')->nullable();
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
        Schema::drop('disposisikabid');
    }
}
