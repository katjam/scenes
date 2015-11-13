<?php

namespace Scenes;

use Illuminate\Database\Eloquent\Model;

class Scene extends Model
{
  protected $fillable = array('scn_no', 'description', 'int_ext', 'setting_id', 'day_night', 'page_count', 'story_day');

  public function setting() {
    return $this->belongsTo('Scenes\Setting');
  }

  public function characters() {
    return $this->belongsToMany('Scenes\Character', 'character_scene', 'scene_id', 'character_id');
  }

  public function page_eights() {
    $whole_page = floor($this->page_count/8);
    $eights = fmod($this->page_count, 8);
    return $whole_page .' ' . $eights .'/8';
  }

}
