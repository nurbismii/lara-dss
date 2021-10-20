<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Normalisasi extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('normalisasi', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('alter_id');
            $table->float('C1');
            $table->float('C2');
            $table->float('C3');
            $table->float('C4');
            $table->float('C5');
            $table->timestamps();

            $table->foreign('alter_id')->references('id')->on('alternatifs');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('normalisasi');
    }
}
