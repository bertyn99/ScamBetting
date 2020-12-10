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
            $table->foreignId('id_equipe_1');
            $table->foreignId('id_equipe_2');
            $table->float('cote_1', 4, 2);
            $table->float('cote_2', 4, 2);
            $table->timestamps();
            $table->foreign('id_jeu')->references('id')->on('jeu');
            $table->foreign('id_equipe_1')->references('id')->on('equipe');
            $table->foreign('id_equipe_2')->references('id')->on('equipe');
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
