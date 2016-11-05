<?php

namespace Scenes;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    protected $fillable = ['set_name', 'location', 'notes'];

    protected $appends = ['loc_set_name'];

    public function scenes()
    {
      return $this->hasMany('Scenes\Scene');
    }

    public function getLocSetNameAttribute()
    {
        return $this->location . ' - ' . $this->set_name;
    }
}
