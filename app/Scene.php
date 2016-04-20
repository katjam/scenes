<?php

namespace Scenes;

use Illuminate\Database\Eloquent\Model;

class Scene extends Model
{
  protected $fillable = array('scn_no', 'description', 'int_ext', 'setting_id', 'day_night', 'page_count', 'filming_day');

  public function setting() {
    return $this->belongsTo('Scenes\Setting');
  }

  public function characters() {
    return $this->belongsToMany('Scenes\Character', 'character_scene', 'scene_id', 'character_id')->withTimestamps();
  }

  public function page_eights() {
    $whole_page = floor($this->page_count/8);
    $eights = fmod($this->page_count, 8);
    return $whole_page .' ' . $eights .'/8';
  }

  public static function page_count($scenes) {
    $count = 0;
    foreach ($scenes as $s) {
      $count += $s->page_count;
    }
    return floor($count/8) . ' ' . fmod($count,8) . '/8';
  }

}
