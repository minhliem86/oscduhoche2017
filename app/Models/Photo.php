<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Photo extends Model{
  public $table = 'photos';

  protected $fillable = ['title', ' img_url', ' status', 'album_id'];

  public function albums(){
    $this->belongsTo('App\Models\Album', 'album_id');
  }

}
