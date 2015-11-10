<?php

namespace Scenes;

use Illuminate\Database\Eloquent\Model;

class Character extends Model
{
  protected $fillable = array('character_name', 'description', 'actor', 'contact');

  public function scenes() {
    return $this->belongsToMany('Scenes\Scene', 'character_scene', 'character_id', 'scene_id');
  }
}
