<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGudangsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gudangs', function (Blueprint $table) {
            $table->id();
            $table->BigInteger('id_barang')->unsigned();
            $table->BigInteger('id_supplier')->unsigned();
            $table->bigInteger('jumlah_stok')->unsigned();



            $table->foreign('id_barang')->references('id')
            ->on('bmasuks')->onUpdate('cascade')
            ->onDelete('cascade');

            $table->foreign('id_supplier')->references('id')
            ->on('suppliers')->onUpdate('cascade')
            ->onDelete('cascade');

            $table->foreign('jumlah_stok')->references('jumlah_msk')
            ->on('bmasuks')->onUpdate('cascade')
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
        Schema::dropIfExists('gudangs');
    }
}
