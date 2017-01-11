<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Model::unguard();

		// $this->call('CountrySeeder');
		// $this->call('PromotionSeeder');
		// $this->call('LocationSeeder');
		// $this->call('TestimonialSeeder');
		// $this->call('TourSeeder');
		DB::statement('SET FOREIGN_KEY_CHECKS = 1');
	}

}
