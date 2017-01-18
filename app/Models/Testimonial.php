<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Testimonial extends Model {

	public $table = "testimonials";

	protected $fillable = ['title','slug','author','description','content','img_avatar','status','order','focus','img_slides'];

}
