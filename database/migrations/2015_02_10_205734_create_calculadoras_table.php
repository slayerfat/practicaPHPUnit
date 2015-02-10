<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCalculadorasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('calculadoras', function(Blueprint $table)
		{
			$table->increments('id');
			$table->text('operacion');
			$table->integer('user_id')->unsigned()->index();
			$table->integer('resultado_id')->unsigned()->index();
			$table->timestamps();
			$table->integer('created_by')->unsigned();
			$table->integer('updated_by')->unsigned();

			$table->foreign('user_id')
						->references('id')
						->on('users')
						->onDelete('cascade');

			$table->foreign('resultado_id')
						->references('id')
						->on('resultados')
						->onDelete('cascade');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('calculadoras');
	}

}
