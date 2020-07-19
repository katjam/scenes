<?php

namespace Scenes;

use Illuminate\Database\Eloquent\Model;

class FilmingDay extends Model
{
    protected $fillable = ['notes'];

    public function scenes()
    {
      return $this->hasMany('Scenes\Scene');
    }

}
