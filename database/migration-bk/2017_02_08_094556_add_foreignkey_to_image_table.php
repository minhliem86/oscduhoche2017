<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForeignkeyToImageTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('images',function(Blueprint $table)
		{
			$table->integer('country_id')->unsigned();
			$table->foreign('country_id')->references('id')->on('countries')->onDelete('cascade');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('images', function(Blueprint $table)
		{
			$table->dropForeign('images_country_id_foreign');
			$table->dropColumn('country_id');
		});
	}

}
