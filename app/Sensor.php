<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sensor extends Model
{
    protected $table         = "sensor";
    protected $primaryKey     = "sensor_id";
    public $incrementing = false;
    public function belongsToDevices()
    {
        return $this->belongsTo('App\Devices','device_uuid','id');
    }
}
