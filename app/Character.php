<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Character extends Model
{
  protected $fillable = array('character_name', 'cast_type', 'description', 'actor', 'contact');

  public function scenes() {
    return $this->belongsToMany('App\Scene', 'character_scene', 'character_id', 'scene_id')->withTimestamps();
  }
}
