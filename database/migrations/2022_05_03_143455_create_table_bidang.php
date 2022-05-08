<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableBidang extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bidang', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama_bidang', 100);
            $table->integer('id_opd')->unsigned();
            $table->timestamps();
        });

        //set FK di kolom id_bidang di tabel users
        Schema::table('users', function (Blueprint $table) {
            $table->foreign('id_bidang')
                ->references('id')
                ->on('bidang')
                ->onDelete('cascade')
                ->onUpdate('cascade');
        });

        //set FK di kolom id_bidang di tabel sub bidang
        Schema::table('subbidang', function (Blueprint $table) {
            $table->foreign('id_bidang')
                ->references('id')
                ->on('bidang')
                ->onDelete('cascade')
                ->onUpdate('cascade');
        });

        //set FK di kolom id_bidang di tabel disposisi kaban
        Schema::table('disposisikaban', function (Blueprint $table) {
            $table->foreign('id_bidang')
                ->references('id')
                ->on('bidang')
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
        // Drop FK di kolom id_bidang pada tabel users
        Schema::table('users', function (Blueprint $table) {
            $table->dropForeign('users_id_bidang_foreign');
        });

        // Drop FK di kolom id_bidang pada tabel sub bidang
        Schema::table('subbidang', function (Blueprint $table) {
            $table->dropForeign('subbidang_id_bidang_foreign');
        });

        // Drop FK di kolom id_bidang pada tabel disposisi kaban
        Schema::table('disposisikaban', function (Blueprint $table) {
            $table->dropForeign('disposisikaban_id_bidang_foreign');
        });

        Schema::drop('bidang');
    }
}
