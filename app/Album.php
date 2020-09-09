<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    protected $fillable = [
      'album',
      'year',
      'genre',
      'artist_id',
      'image_id'
    ];

    public function songs() {
      return $this->hasMany('App\Song');
    }

    public function artist() {
      return $this->belongsTo('App\Artist');
    }

    public function image() {
      return $this->hasOne('App\Image');
    }
}
