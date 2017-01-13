<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Image extends Model {

	public $table = "images";

	protected $fillable = ['img_url','img_alt','status','order','type'];

}
