<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlayersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('players', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            // $table->integer('id_user')->nullable();

            $table->unsignedBigInteger('id_user')->nullable();
            $table->foreign('id_user')->references('id')->on('users');

            // $table->bigInteger('id_team')->unsigned();
            $table->unsignedBigInteger('id_team');
            $table->foreign('id_team')->references('id')->on('teams');

            $table->integer('num_dorsal');
            $table->integer('valor_inicial');
            $table->integer('id_position');
            $table->boolean('titular')->default('0');
            //0 No es titular, 1 es titular
            $table->integer('goals')->default('0');
            $table->string('points')->default('0');
            $table->timestamps();
          
        });

        // Schema::table('players', function($table) {
        //     $table->foreign('id_team')->references('id')->on('teams');
        // });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('players');
    }
}
