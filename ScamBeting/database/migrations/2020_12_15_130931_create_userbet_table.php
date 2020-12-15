<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserbetTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('userbet', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->foreignId('id_paris');
            $table->boolean('win')->nullable();
            $table->float('cote', 8, 3);
            $table->float('mise', 8, 3);
            $table->string('status')->default('active');
            $table->timestamps();
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('id_paris')->references('id')->on('paris');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('userbet');
    }
}
