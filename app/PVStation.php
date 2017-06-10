<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PVStation extends Model
{
    protected $table         = "pvstation";
    protected $primaryKey     = "station_id";
    public $incrementing = false;

    public function belongsToUser()
    {
        return $this->belongsTo('App\User','user_id','id');
    }

    public function hasManyArrays()
    {
        return $this->hasMany('App\PVArray','array_id','id');
    }
    public function hasManyModules()
    {
        return $this->hasMany('App\PVModules','module_id','id');
    }
}
