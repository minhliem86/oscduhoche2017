<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Country extends Model {

	public $table = "countries";

	protected $fillable = ['name','slug','status','order'];

}
