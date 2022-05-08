<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableSubbidang extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subbidang', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama_sub_bidang', 100);
            $table->integer('id_bidang')->unsigned();
            $table->timestamps();
        });

        //set FK di kolom id_subbidang di tabel disposisi kabid
        Schema::table('disposisikabid', function (Blueprint $table) {
            $table->foreign('id_subbidang')
                ->references('id')
                ->on('subbidang')
                ->onDelete('cascade')
                ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // Drop FK di kolom id_subbidang pada tabel disposisi kabid
        Schema::table('disposisikabid', function (Blueprint $table) {
            $table->dropForeign('disposisikabid_id_subbidang_foreign');
        });

        Schema::drop('subbidang');
    }
}
