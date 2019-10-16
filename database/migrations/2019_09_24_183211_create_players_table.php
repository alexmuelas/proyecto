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
            $table->integer('id_user')->nullable();

            $table->bigInteger('id_team')->unsigned();

            // $table->foreign ('id_team')->references('id')->on('teams')  ->onDelete ( 'cascade' )
            // ->onUpdate ( 'cascade' );

            $table->integer('num_dorsal');
            $table->integer('valor_inicial');
            $table->string('position');
            $table->string('points')->nullable();
            $table->timestamps();
          
        });

        Schema::table('players', function($table) {
            $table->foreign('id_team')->references('id')->on('teams');
        });
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
