<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    protected $fillable = ['set_name', 'location', 'notes'];

    protected $appends = ['loc_set_name'];

    public function scenes()
    {
      return $this->hasMany('App\Scene');
    }

    public function getLocSetNameAttribute()
    {
        return $this->location . ' - ' . $this->set_name;
    }
}
