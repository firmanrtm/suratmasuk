<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableSurat extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('surat', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nomor_surat', 50);
            $table->date('tgl_surat');
            $table->text('perihal');
            $table->string('file_surat');
            $table->timestamps();
        });

        //set FK di kolom id_surat di tabel disposisi kaban
        Schema::table('disposisikaban', function (Blueprint $table) {
            $table->foreign('id_surat')
                ->references('id')
                ->on('surat')
                ->onDelete('cascade')
                ->onUpdate('cascade');
        });

        //set FK di kolom id_surat di tabel disposisi kabid
        Schema::table('disposisikabid', function (Blueprint $table) {
            $table->foreign('id_surat')
                ->references('id')
                ->on('surat')
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
        // Drop FK di kolom id_surat pada tabel disposisi kaban
        Schema::table('disposisikaban', function (Blueprint $table) {
            $table->dropForeign('disposisikaban_id_surat_foreign');
        });

        // Drop FK di kolom id_surat pada tabel disposisi kabid
        Schema::table('disposisikabid', function (Blueprint $table) {
            $table->dropForeign('disposisikabid_id_surat_foreign');
        });

        Schema::drop('surat');
    }
}
