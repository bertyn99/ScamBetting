<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateParisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('paris', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_jeu');
            $table->dateTime('endbet');
            $table->timestamps();
            $table->foreign('id_jeu')->references('id')->on('jeu')->onDelete('restrict')
                ->onUpdate('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('paris');
    }
}
