<?php

namespace Scenes;

use Illuminate\Database\Eloquent\Model;

class Scene extends Model
{
  protected $fillable = array('scn_no', 'int_ext', 'setting_id', 'day_night', 'story_day');

  public function setting() {
    return $this->belongsTo('Scenes\Setting');
  }

  public function characters() {
    return $this->belongsToMany('Scenes\Character', 'character_scene', 'scene_id', 'character_id');
  }
}
