<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateParisEquipesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('paris_equipe', function (Blueprint $table) {
            $table->id();
            $table->foreignId('equipe_id');
            $table->foreign('equipe_id')
                ->references('id')
                ->on('equipes')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->foreignId('paris_id');
            $table->foreign('paris_id')
                ->references('id')
                ->on('paris')
                ->onDelete('cascade')
                ->onUpdate('cascade');
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
        Schema::dropIfExists('paris_equipes');
    }
}
