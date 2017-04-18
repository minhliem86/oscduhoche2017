<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddMoreIdHashRegisterTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('register', function(Blueprint $table)
		{
			$table->string('id_hash');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('register', function(Blueprint $table)
		{
			$table->dropColumn('id_hash');
		});
	}

}
