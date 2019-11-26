<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePujasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pujas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('id_vendedor')->nullable();
            $table->integer('id_player');
            $table->string('name_player');
            $table->integer('id_comprador')->nullable();
            $table->integer('id_position');
            $table->bigInteger('money_puja');
            $table->boolean('status')->default(0); //0 puja abierta, 1 puja cerrada
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
        Schema::dropIfExists('pujas');
    }
}
