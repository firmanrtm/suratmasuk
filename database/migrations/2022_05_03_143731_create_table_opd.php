<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\Schema;
use phpDocumentor\Reflection\DocBlock\Tags\Reference\Reference;

class CreateTableOpd extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('opd', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama_opd', 50);
            $table->string('instansi', 100);
            $table->string('singkatan', 30);
            $table->timestamps();
        });

        //set FK di kolom id_opd di tabel bidang
        Schema::table('bidang', function (Blueprint $table) {
            $table->foreign('id_opd')
                ->references('id')
                ->on('opd')
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
        // Drop FK di kolom id_opd pada tabel bidang
        Schema::table('bidang', function (Blueprint $table) {
            $table->dropForeign('bidang_id_opd_foreign');
        });

        Schema::drop('opd');
    }
}
