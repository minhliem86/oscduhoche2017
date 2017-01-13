<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Country extends Model {

	public $table = "countries";

	protected $fillable = ['name','slug','status','order','img_avatar'];

	public function tour(){
		return $this->haveMany('App\Models\Tour','country_id');
	}
}
