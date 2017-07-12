<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Video extends Model {

	public $table = 'videos';

    protected $fillable = ['title', 'status', 'video_url', 'img_url'];

    public function albums()
    {
        return $this->belongsTo('App\Models\Album');
    }

}
