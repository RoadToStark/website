<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRessourcesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('ressources', function(Blueprint $table)
		{
			$table->increments("id");

			$table
				->string("name")
				->nullable()
				->default(null);

			$table
				->string("type")
				->nullable()
				->default(null);

			$table
				->integer("task")
				->nullable()
				->default(null);

			$table
				->longText("url")
				->nullable()
				->default(null);

            $table
                ->dateTime("created_at")
                ->nullable()
                ->default(null);

            $table
                ->dateTime("updated_at")
                ->nullable()
                ->default(null);

		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::dropIfExists("ressources");	
	}


}
