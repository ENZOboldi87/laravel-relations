<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Artist extends Model
{
  protected $fillable = [
    'artist',
  ];

  public function album() {
    return $this->hasMany('App\Album');
  }
}
