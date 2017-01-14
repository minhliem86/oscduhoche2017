<?php namespace App\ViewComposers;

use Illuminate\Contracts\View\View;

use App\Models\Country;

class MyViewComposer {
	  /**
	* Create a new  composer.
	* @return void
	*/
	
	protected $country;

	public function __construct(Country $country) {
		$this->country = $country;
	}

	/**
	* Bind data to the view.
	*
	* @param  View  $view
	* @return void
	*/
	public function compose(View $view) {
		// Code here 
		$country_data = $this->country->all();
		$view->with('country', $country_data);
	}
}