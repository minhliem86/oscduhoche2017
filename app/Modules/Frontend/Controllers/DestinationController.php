<?php namespace App\Modules\Frontend\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\Request;
use App\Models\Country;

class DestinationController extends Controller {

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
	
	public $country;

	public function __construct(Country $country){
		$this->country = $country;
	}

	public function getDetail($slug=null){
		// $country_list = Country::list('name','id');
		if($slug != null){
			$country_data = $this->country->select('id','name','description')->where('slug',$slug)->with(['tour'=>function($query){
				$query->select('id','title','description','age','start','end');
			}])->first();
			return view('Frontend::pages.destination',compact('country_data'));
			
		}
		// return view('Frontend::pages.destination');
	}

}
