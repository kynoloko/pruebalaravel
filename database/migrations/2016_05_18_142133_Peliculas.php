<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Peliculas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('peliculas', function (Blueprint $table) {
            $table->increments('id');
			$table->string('name');
			$table->string('cast');
			$table->string('direction');
			$table->string('duration');
			$table->timestamps();
			$table->integer('genero_id')->unsigned();
$table->foreign('genero_id')->references('id')->on('genero');
        });
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
