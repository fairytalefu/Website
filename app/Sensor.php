<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sensor extends Model
{
    protected $fillable=['sensor_name','value','update_at'];

    protected $table         = "sensor";
    public function belongsToDevices()
    {
        return $this->belongsTo('App\Devices');
    }
}
