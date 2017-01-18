<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColumnImgslideToTestimonialTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('testimonials',function(Blueprint $table)
		{
			$table->string('img_slides')->nullable();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('testimonials', function(Blueprint $table)
		{
			$table->dropColumn('img_slides');
		});
	}

}
