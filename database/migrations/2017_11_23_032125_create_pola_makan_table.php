<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePolaMakanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pola_makan', function (Blueprint $table) {
            $table->integer('pola_id')->unsigned();
            $table->integer('makanan_id')->unsigned();

            $table->foreign('pola_id')->references('id')->on('pola')->onDelete('cascade');
            $table->foreign('makanan_id')->references('id')->on('makanan')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::disableForeignKeyConstraints();
        Schema::dropIfExists('pola_makan');
    }
}
