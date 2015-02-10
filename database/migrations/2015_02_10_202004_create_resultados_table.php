<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateResultadosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('resultados', function(Blueprint $table)
		{
			$table->increments('id');
			$table->float('resultado', 14, 4);
			$table->timestamps();
			$table->integer('created_by')->unsigned();
			$table->integer('updated_by')->unsigned();
			});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('resultados');
	}

}
