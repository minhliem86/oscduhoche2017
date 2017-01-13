<?php namespace App\Modules\Frontend\Controllers;

use App\Http\Requests\Request;
use App\Models\Country;

class HomeController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Home Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders your application's "dashboard" for users that
	| are authenticated. Of course, you are free to change or remove the
	| controller as you wish. It is just here to get your app started!
	|
	*/

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	
	public function getIndex(){
		$country_list = Country::list('name','id');
		
	}

}
