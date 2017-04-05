<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClubsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('clubs', function(Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');
            $table->string('url');
            $table->string('biografia');
            $table->string('categoria');
            $table->string('jugadores');
            $table->string('ubicacion');
            $table->string('imagen');
            $table->Date('fechaNacimiento');
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
		Schema::drop('clubs');
	}

}
