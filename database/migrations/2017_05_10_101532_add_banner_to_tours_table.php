<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddBannerToToursTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('tours', function(Blueprint $table)
		{
			$table->string('banner_desktop')->nullable();
			$table->string('banner_mobile')->nullable();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('tours', function(Blueprint $table)
		{
			$table->dropColumn('banner_desktop');
			$table->dropColumn('banner_mobile');
		});
	}

}
