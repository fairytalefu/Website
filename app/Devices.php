<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Devices extends Model
{
    protected $table         = "devices";
    protected $primaryKey     = "device_uuid";
    public $incrementing = false;
    public function hasManySensor()
    {
        return $this->hasMany('App\Sensor','device_uuid','id');
    }
}
