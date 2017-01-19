<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Country extends Model {

	public $table = "countries";

	protected $fillable = ['name','slug','status','order','img_avatar','description','multi_countries','home_show','img_slide'];

	public function tour(){
		return $this->hasMany('App\Models\Tour','country_id');
	}
}
