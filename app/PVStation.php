<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PVStation extends Model
{
    protected $table         = "pvstation";


    public function belongsToUser()
    {
        return $this->belongsTo('App\User');
    }

    public function hasManyModules()
    {
        return $this->hasMany('App\PVModules');
    }
}
