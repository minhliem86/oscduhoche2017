<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddUsernameToUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('users',function(Blueprint $table)
		{
			$table->string('username')->nullable();
			$table->integer('tour_id')->unsigned();
			$table->foreign('tour_id')->references('id')->on('tours')->onDelete('cascade');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('users',function(Blueprint $table){
			$table->dropColumn('username');
			$table->dropColumn('tour_id');
		});
	}

}
