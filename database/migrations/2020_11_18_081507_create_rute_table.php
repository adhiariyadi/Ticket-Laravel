<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRuteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rute', function (Blueprint $table) {
            $table->id();
            $table->string('tujuan');
            $table->string('start');
            $table->string('end');
            $table->integer('harga');
            $table->time('jam');
            $table->unsignedBigInteger('transportasi_id');
            $table->timestamps();

            $table->foreign('transportasi_id')->references('id')->on('transportasi');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rute');
    }
}
