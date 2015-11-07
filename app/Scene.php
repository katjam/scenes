<?php

namespace Scenes;

use Illuminate\Database\Eloquent\Model;

class Scene extends Model
{
  protected $fillable = array('scn_no', 'int_ext', 'setting_id', 'day_night', 'story_day');

  public function setting() {
    return $this->hasOne('Setting');
  }

  public function characters() {
    return $this->belongsToMany('Character', 'character_scenes', 'scene_id', 'character_id');
  }
}
