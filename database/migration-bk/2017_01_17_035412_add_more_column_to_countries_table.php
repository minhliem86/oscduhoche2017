<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddMoreColumnToCountriesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('countries',function(Blueprint $table)
		{
			$table->boolean('multi_countries')->default(0);
			$table->boolean('home_show')->default(0);
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('countries', function(Blueprint $table)
		{
			$table->dropColumn('multi_countries');
			$table->dropColumn('home_show');
		});
	}

}
