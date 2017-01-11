<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Location extends Model {

	public $table = 'locations';

	protected $fillable = ['id_city','id_center','title','slug','status','order'];

}
