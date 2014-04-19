<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjectsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('projects', function(Blueprint $table)
		{
			$table->increments("id");

			$table
				->string("name")
				->nullable()
				->default(null);

			$table
				->string("description")
				->nullable()
				->default(null);

			$table
				->string("picture")
				->nullable()
				->default(null);

			$table
				->longText("presentation")
				->nullable()
				->default(null);

			$table
				->integer("owner")
				->default(1);

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
		Schema::table('projects', function(Blueprint $table)
		{
			//
		});
	}

}
