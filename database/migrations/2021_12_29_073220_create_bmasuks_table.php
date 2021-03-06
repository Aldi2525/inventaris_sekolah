<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBmasuksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bmasuks', function (Blueprint $table) {
            $table->id();
            $table->string('nama_barang');
            $table->date('tgl_msk');
            $table->integer('jumlah_msk');
            $table->bigInteger('id_supplier')->unsigned();

            $table->foreign('id_supplier')->references('id')
            ->on('suppliers')->onUpdate('cascade')
            ->onDelete('cascade');
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
        Schema::dropIfExists('bmasuks');
    }
}
