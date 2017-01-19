<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Register extends Model {

	public $table = "register";

	protected $fillable = ['fullname','phone','email','id_cty','id_Center','country','message','content_type','inquiry','id_hash'];

}
