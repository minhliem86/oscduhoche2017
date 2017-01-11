<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableTours extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tours', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('title');
			$table->string('slug');
			$table->text('description');
			$table->text('content');
			$table->string('img_avatar');
			$table->string('partner');
			$table->string('stay');
			$table->string('week');
			$table->string('start');
			$table->string('end');
			$table->string('price');
			$table->string('age');
			$table->boolean('status')->default('1');
			$table->integer('order');
			$table->integer('country_id')->unsigned();
			$table->foreign('country_id')->references('id')->on('countries')->onDelete('cascade');
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
		Schema::drop('tours');
	}

}
