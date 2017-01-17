<?php namespace App\Modules\Frontend\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Country;
use App\Models\Tour;

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
	public $tour;

	public function __construct(Country $country, Tour $tour){
		$this->country = $country;
		$this->tour = $tour;
	}

	public function getCountry($slug=null, $slugtour=null){
		// $country_list = Country::list('name','id');
		if($slug != null && $slugtour != null){
			$tour_detail = $this->tour->where('slug',$slugtour)->first();
			return view('Frontend::pages.course_detail',compact('tour_detail'));
		}
		if($slug != null && $slugtour == null ){
			$country_data = $this->country->select('id','name','description','slug')->where('slug',$slug)->with(['tour'=>function($query){
				$query->select('id','title','description','age','start','end','slug');
			}])->first();
			return view('Frontend::pages.destination',compact('country_data'));
		}
		return view('Frontend::pages.home');
	}

	public function getTour($slugcountry=null, $slugtour=null)
	{
		// if($slugcountry != null && $slugtour != null){
			
		// }
	}

}
