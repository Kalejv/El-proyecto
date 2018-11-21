<?php

namespace Futbol;

use Illuminate\Database\Eloquent\Model;

class Club extends Model
{
    protected $fillable = ['name' , 'avatar', 'text'];
/**
 * Get the route key for the model.
 *
 * @return string
 */
public function getRouteKeyName()
{
    return 'slug';
}
}
