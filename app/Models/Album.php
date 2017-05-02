<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Album extends Model{
  public $table = 'albums';

  protected $fillable = ['title', ' status', ' tour_id'];

  public function tours(){
    $this->belongsTo('App\Models\Tour', 'tour_id');
  }

  public function photos(){
    $this->hasMany('App\Models\Photo');
  }
}
