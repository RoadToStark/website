<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTasksTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tasks', function(Blueprint $table)
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
				->longText("instructions")
				->nullable()
				->default(null);

			$table
				->integer("roadmap")
				->default(null);

			$table
                ->dateTime("starts_at")
                ->nullable()
                ->default(null);

            $table
                ->dateTime("ends_at")
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
		Schema::table('tasks', function(Blueprint $table)
		{
			//
		});
	}

}
