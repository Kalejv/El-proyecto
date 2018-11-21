<?php

namespace Futbol;

use Illuminate\Database\Eloquent\Model;

class Rol extends Model
{
    public function users(){
        return $this->belongsToMany('Futbol\User');
    }
}
