<?php

namespace Scenes;

use Illuminate\Database\Eloquent\Model;

class Character extends Model
{
  protected $fillable = array('character_name', 'description', 'actor', 'contact');

  public function scenes() {
    return $this->belongsToMany('Scene', 'characters_scenes', 'character_id', 'scene_id');
  }
}
