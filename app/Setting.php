<?php

namespace Scenes;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    protected $fillable = array('set_name', 'location', 'notes');
}