<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tour extends Model {

	public $table = 'tours';

	protected $fillable = ['title','description','content','img_avatar','partner','stay','week','start','end','price','age','order','status','country_id','slug','img_sharing'];

	public function country(){
		return $this->belongsTo('App\Models\Country','country_id');
	}

	public function location(){
		return $this->belongsToMany('App\Models\Location','tour_location','tour_id','location_id');
	}

	public function schedule(){
		return $this->hasMany('App\Models\Schedule','tour_id');
	}

	public function photos(){
		return $this->hasManyThrough('App\Models\Photo', 'App\Models\Album');
	}

}
