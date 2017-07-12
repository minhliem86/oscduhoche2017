<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddFilenameToPhoto extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('photos', function(Blueprint $table)
		{
			$table->string('filename')->nullable();
			$table->integer('order')->default(1);
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('photos', function(Blueprint $table)
		{
			$table->dropColumn('filename');
			$table->dropColumn('order');
		});
	}

}
